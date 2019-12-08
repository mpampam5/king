<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Tentang extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Tentang_model","model");
  }

  function _rules()
  {
    $this->form_validation->set_rules("keterangan","*&nbsp;","trim|xss_clean|required");
    $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
  }

  function index()
  {
    $this->template->set_title("Tentang JPKP");
    $data['row']  = $this->db->get_where("tentang")->result();
    $this->template->view("content/tentang/index",$data);
  }

  function detail($slug)
  {
    if ($row = $this->model->get_where("tentang",["slug"=>$slug])) {
      $this->template->set_title("tentang JPKP");
      $data = array("slug"    => $row->slug,
                    "title"    => $row->title,
                    "keterangan" => $row->keterangan,
                    );
      $this->template->view("content/tentang/detail",$data);
    }
  }

  function edit($slug)
  {
    if ($row = $this->model->get_where("tentang",["slug"=>$slug])) {
      $this->template->set_title("tentang JPKP");
      $data = array('action'  => site_url("backend/tentang/update_action/$slug"),
                    "button"  => "edit",
                    "slug"    => set_value("slug",$row->slug),
                    "title"    => set_value("title",$row->title),
                    "keterangan" => set_value("keterangan",$row->keterangan),
                    );
      $this->template->view("content/tentang/form",$data);
    }
  }


  function update_action($slug)
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [
                    "keterangan"  => $this->input->post("keterangan",true),
                    "modified"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_update("tentang",$data,["slug"=>$slug]);

          //logs Activity
          $ket_logs = array_merge(["slug"=>$slug],$data);
          logs("tentang","update",json_encode($ket_logs));

          $json['alert'] = "update data successfully";
          $json['success'] =  true;
        }else {
          foreach ($_POST as $key => $value)
            {
              $json['alert'][$key] = form_error($key);
            }
        }

        echo json_encode($json);
    }
  }



}
