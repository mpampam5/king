<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Bantuan extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Bantuan_model","model");
  }

  function index()
  {
    $this->template->set_title("information");
    $this->template->view("content/bantuan/index");
  }

  function fetch()
   {
    $output = '';
    $data = $this->model->fetch_data($this->input->post('limit'), $this->input->post('start'));
    if($data->num_rows() > 0)
    {
     foreach($data->result() as $row)
     {

      $output .= '<li>'.$row->keterangan.'</li>';
     }
    }
    echo $output;
   }

}
