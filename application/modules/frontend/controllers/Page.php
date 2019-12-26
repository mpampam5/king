<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Page extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index($slug="")
  {
    $this->template->set_title("Tentang");
    $row = $this->db->get_where("tentang",["slug"=>$slug])->row();
    $data['row'] = $row;
    $this->template->view("content/page/index",$data);
  }

  function download_legalitas()
  {
    $this->load->helper('download');
    $path = "./_template/docs/LEGALITAS-JPKP.pdf";
    force_download($path, NULL);
  }

}
