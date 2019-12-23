<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{


  public function __construct()
    {
      parent::__construct();
      if ($this->session->userdata("logins_person")!=true) {
          redirect(site_url("frontend/login"),"refresh");
      }
      $this->load->helper(array("frontend","enc_gue","tanggal_indonesia"));
      $this->load->library(array("template"));
    }


    function _cek_password($str)
      {
        if ($row = $this->model->get_where("tb_person",["id_person"=>sess('id_person')])) {
            $this->load->helper("pass_has");
            if (pass_decrypt($row->token,$str,$row->password)==true) {
              return true;
            }else {
              $this->form_validation->set_message('_cek_password', '* Password Salah');
              return false;
            }
        }else {
          $this->form_validation->set_message('_cek_password', '* Password Salah');
          return false;
        }
      }

}
