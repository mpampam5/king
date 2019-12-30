<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('download');
  }

  function index()
  {
    echo "";
  }

  function ad_art()
  {
    $path = "./_template/docs/AD-ART-JPKP.pdf";
    force_download($path, NULL);
  }


  function legalitas()
  {
    $path = "./_template/docs/LEGALITAS-JPKP.pdf";
    force_download($path, NULL);
  }


  function id_card($id="")
    {
      if ($id!="") {
        $this->load->helper(array("frontend","enc_gue"));
        $this->load->model("Account_model","model");
        if ($row = $this->model->get_where("tb_person",["is_verifikasi"=>"1","is_delete"=>"0","id_person"=>dec_uri($id)])) {
          $this->load->library('Pdfgenerator');
          $data["row"] = $row;
          $html = $this->load->view('id_card',$data,true);
          // $this->load->view('content/relawan_terverifikasi/id_card',$data);
          $filename = 'ID_CARD_'.time();
          $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
        }
      }
    }

}
