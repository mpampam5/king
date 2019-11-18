<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Administrator_model","model");
  }

  function index()
  {
    $this->template->set_title("administrator");
    $data['row'] = $this->model->get_data();
    $this->template->view("content/administrator/index",$data);
  }

  function add()
  {

    $this->load->library("form_validation");
    $this->template->set_title("administrator");
    $data = array('action'  => site_url("backend/administrator/add_action"),
                  "button"  => "tambah",
                  "nama" => set_value("nama"),
                  "telepon" => set_value("telepon"),
                  "email" => set_value("email"),
                  "level" => set_value("level"),
                  "is_active" => set_value("is_active")
                  );
    $this->template->view("content/administrator/form",$data);
  }

}
