<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Kegiatan extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Kegiatan_model","model");
  }

  function index()
  {
    $this->template->set_title("information");
    $this->template->view("content/kegiatan/index");
  }


  function fetch()
   {
    $output = '';
    $data = $this->model->fetch_data($this->input->post('limit'), $this->input->post('start'));
    if($data->num_rows() > 0)
    {
     foreach($data->result() as $row)
     {

      $output .= '<div class="col-md-12 content">
                  <h6 class="text-center text-danger" style="font-size:12px;">'.$row->title.'</h6>
                  <p class="text">
                    '.$row->keterangan.'
                  </p>
                  <p class="links text-center">
                    <a href="'.$row->link_terkait.'" target="_blank">'.$row->link_terkait.'</a>
                  </p>
              </div>';
     }
    }
    echo $output;
   }


}
