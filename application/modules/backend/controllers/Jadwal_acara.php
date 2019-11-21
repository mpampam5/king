<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Jadwal_acara extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Jadwal_acara_model","model");
  }

  function index()
  {
    $this->template->set_title("Jadwal Acara");
    $this->template->view("content/jadwal_acara/index");
  }


  function add()
  {
    $this->template->set_title("Jadwal Acara");
    $data = array('action'  => site_url("backend/bantuan/add_action"),
                  "button"  => "tambah",
                  "keterangan" => set_value("keterangan"),
                  );
    $this->template->view("content/jadwal_acara/form",$data);
  }

}
