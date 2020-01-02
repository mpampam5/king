<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    if ($this->session->userdata("logins_person")!=true) {
        $this->load->view("login");
    }else {
      redirect(site_url("frontend/home"),"refresh");
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
    $this->load->helper(array("enc_gue","pass_has"));

    $this->form_validation->set_rules("email","*&nbsp;","trim|xss_clean|required");
    $this->form_validation->set_rules("password","*&nbsp;","trim|required");
    $this->form_validation->set_error_delimiters('<span class="error ml-2 text-white" style="font-size:12px">','</span>');


    if ($this->form_validation->run()) {
        $json["success"] = true;

        $email = $this->input->post("email");
        $password =  $this->input->post("password");

        $query =  $this->db->get_where("tb_person",[
                                                    "email" => $email,
                                                    "is_delete" => '0',
                                                  ]);

        if ($query->num_rows() > 0) {
            $row =  $query->row();

            $pwd =  $row->password;
            $token =  $row->token;

            if (pass_decrypt($token,$password,$pwd)===true) {

              $token = enc_uri(date('dmYhis'));

              $this->db->where("email",$row->email)
                       ->update("tb_person",["kode_token"=>$token]);


              $session = array('logins_person' => true,
                               'id_person' => $row->id_person
                              );
              $this->session->set_userdata($session);

              // logs("login","login","login");
              $json['valid'] = true;
              $json['url'] = site_url("frontend/home");
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
  // logs("logout","logout","logout");
  $this->session->sess_destroy();
  redirect(site_url("frontend/login"),'refresh');
}

}
