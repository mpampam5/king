<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('pass_has','backend/backend'));
  }

    public function index()
    {
      if ($this->session->userdata("logins")==true) {
        redirect("backend/home","refresh");
      }else {
        $this->load->view('login');
      }
    }


    function action()
    {
      if ($this->input->is_ajax_request()) {
      $json = array('success' => false,
                    "valid"=>false,
                    'url'=>"",
                    'alert'=>array()
                  );
      $this->load->library("form_validation");
      $this->form_validation->set_rules("email","*&nbsp;","trim|xss_clean|required");
      $this->form_validation->set_rules("password","*&nbsp;","trim|required");
      $this->form_validation->set_error_delimiters('<label class="error ml-2 text-danger" style="font-size:12px">','</label>');


      if ($this->form_validation->run()) {
          $json["success"] = true;

          $email = $this->input->post("email");
          $password =  $this->input->post("password");

          $query =  $this->db->get_where("tb_admin",[
                                                      "email" => $email,
                                                      "is_delete" => '0',
                                                      "is_active" => "1"
                                                    ]);

          if ($query->num_rows() > 0) {
              $row =  $query->row();

              $pwd =  $row->password;
              $token =  $row->token;

              if (pass_decrypt($token,$password,$pwd)===true) {


                $session = array('logins' => true,
                                 'id_admin' => $row->id_admin
                                );
                $this->session->set_userdata($session);

                logs("login","login","login");
                $json['valid'] = true;
                $json['url'] = site_url("backend/home");
              }else {
                $json['alert'] = "Email Atau Password Salah";
              }
          }else {
            $json['alert'] = "Email Atau Password Salah";
          }

      }else {
        foreach ($_POST as $key => $value) {
          $json['alert'][$key] = form_error($key);
        }
      }

      echo json_encode($json);
    }
  }


  function logout()
  {
    logs("logout","logout","logout");
    $this->session->sess_destroy();
    redirect(site_url("panel-admin"),'refresh');
  }


}

/* End of file Login.php */
