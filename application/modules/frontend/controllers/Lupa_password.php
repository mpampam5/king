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
        $this->load->helper(array("enc_gue","pass_has"));
        $token = enc_uri(date('dmYhis')."-".$this->input->post("email"));

        $qry = $this->db->get_where("tb_person",["email"=>$this->input->post("email")])->row();

        $this->db->where("email",$this->input->post("email"))
                 ->update("tb_person",["kode_token"=>$token]);


        $data['row'] = $qry;
        $data['token'] = $token;

        $subject  = "JPKP PUSAT - RESET PASSWORD";
        $this->load->helper("frontend");
        $template = $this->load->view('template_email',$data,TRUE);

        $config['charset']      = 'utf-8';
        $config['protocol']     = "smtp";
        $config['mailtype']     = "html";
        $config['smtp_host']    = "ssl://mail.jpkppusat.com";//pengaturan smtp
        $config['smtp_port']    = 465;
        $config['smtp_user']    = "no-replay@jpkppusat.com"; // isi dengan email kamu
        $config['smtp_pass']    = "@@111111qwerty00"; // isi dengan password kamu
        $config['smtp_timeout'] = 4; //4 second
        $config['crlf']         = "\r\n";
        $config['newline']      = "\r\n";

        $this->load->library('email',$config);
        //konfigurasi pengiriman

        $this->email->from($config['smtp_user'],"JPKP - RESET PASSWORD");
        $this->email->to($this->input->post("email"));
        $this->email->subject($subject);
        $this->email->message($template);
        $this->email->send();






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


  function email()
  {
    $this->load->helper("frontend");
    $qry = $this->db->get_where("tb_person",["email"=>"mpampam5@gmail.com"])->row();
    $data['token'] = 'dsadsadsda';
    $data['row'] = $qry;
    $this->load->view("template_email",$data);
  }

}
