<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Home extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->template->set_title("Dashboard");
    $data['terverifikasi'] = $this->db->get_where("tb_person",["is_verifikasi"=>"1","is_delete"=>"0"])->num_rows();
    $data['belum_terverifikasi'] = $this->db->get_where("tb_person",["is_verifikasi"=>"0","is_delete"=>"0"])->num_rows();
    $this->template->view("content/dashboard/index",$data);
  }

}
