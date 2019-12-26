<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_password extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    // $this->load->model("Ganti_password_model","model");
    $this->load->library(array("form_validation"));
  }

  function index()
  {
    $this->load->view("lupa_password");
  }

  function action()
  {
    if ($this->input->is_ajax_request()) {
      $json = array('success'=>false, 'alert'=>array());
      $this->form_validation->set_rules("email","*&nbsp;","trim|xss_clean|valid_email|required|callback__cek_email");
      $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
      if ($this->form_validation->run()) {


        $json['alert'] = "add data successfully";
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


  function _cek_email($str)
  {
    $where =  array("email"=>$str,"is_delete"=>"0");
        if ($this->db->get_where("tb_person",$where)->num_rows() > 0) {
          return true;
        } else {
          $this->form_validation->set_message('_cek_email', '*&nbsp;Email Tidak Terdaftar');
          return false;
        }
  }

}
