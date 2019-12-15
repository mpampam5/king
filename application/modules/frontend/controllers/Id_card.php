<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Id_card extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array("frontend","enc_gue"));
    $this->load->model("Account_model","model");
  }

  function get($id="")
    {
      if ($id!="") {
        if ($row = $this->model->get_where("tb_person",["is_verifikasi"=>"1","is_delete"=>"0","id_person"=>dec_uri($id)])) {
          $this->load->library('Pdfgenerator');
          $data["row"] = $row;
          $html = $this->load->view('content/account/id_card',$data,true);
          // $this->load->view('content/relawan_terverifikasi/id_card',$data);
          $filename = 'ID_CARD_'.time();
          $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
        }
      }
    }

}
