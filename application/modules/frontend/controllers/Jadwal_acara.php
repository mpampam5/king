<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Jadwal_acara extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Jadwal_acara_model","model");
    $this->perPage = 4;
  }

  function index()
  {
    $this->template->set_title("information");
    $totalPosts = $this->model->getPostsCount();
    $data['total_pages']  = ceil($totalPosts/$this->perPage);
    if (!empty($this->input->get("page"))) {
      $start = $this->perPage * $this->input->get("page");
      $data['posts'] = $this->model->getPosts($this->perPage,$start);
      $this->load->view("content/jadwal_acara/load_more",$data);
    }else {
      $start = 0;
      $data['posts'] = $this->model->getPosts($this->perPage,$start); //limit,start
      $this->template->view('content/jadwal_acara/index',$data);
    }
  }



}
