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
    $data['row'] = $this->db->get("aturan")->result();
    $this->template->view("content/aturan/index",$data);
  }

}
