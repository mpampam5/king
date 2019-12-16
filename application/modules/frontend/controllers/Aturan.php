<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Aturan extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->template->set_title("information");
    $data['row'] = $this->db->get_where("aturan",["is_delete"=>"0"])->result();
    $this->template->view("content/aturan/index",$data);
  }


  function download_ad_art()
  {
    $this->load->helper('download');
    $path = "./_template/docs/AD-ART-JPKP.pdf";
    force_download($path, NULL);
  }

}
