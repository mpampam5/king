<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Ganti_password extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Ganti_password_model","model");
  }

  function index()
  {
    $this->template->set_title("Ganti Password");
    $this->template->view("content/ganti_password/index");
  }


  function action()
  {
    if ($this->input->is_ajax_request()) {
      $this->load->library("form_validation");
        $json = array('success'=>false, 'alert'=>array());
        $this->form_validation->set_rules("password_lama","*&nbsp;","trim|xss_clean|required|callback__cek_password");
        $this->form_validation->set_rules("password_baru","*&nbsp;","trim|xss_clean|required|min_length[6]");
        $this->form_validation->set_rules("konfirmasi_password","*&nbsp;","trim|xss_clean|required|matches[password_baru]",[
          "matches" => "* Konfirmasi Password Baru tidak valid"
        ]);
        $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
        if ($this->form_validation->run()) {

          $this->load->helper('pass_has');
          $token = enc_uri(date('dmYhis'));

          $data = [
                    "token"       => $token,
                    "password"    => pass_encrypt($token,$this->input->post("konfirmasi_password")),
                    "modified"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_update("tb_person",$data,["id_person"=>sess("id_person")]);

          $json['alert'] = "Ganti password Berhasil";
          $json['success'] =  true;
        }else {
          foreach ($_POST as $key => $value)
            {
              $json['alert'][$key] = form_error($key);
            }
        }

        echo json_encode($json);
    }
  }

}
