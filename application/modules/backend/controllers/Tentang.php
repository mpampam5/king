<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Tentang extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    if (profile_admin("level")!="superadmin") {
        redirect(site_url("backend/error/not_permission"),"refresh");
    }
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

  function upload()
  {
    $this->template->set_title("Tentang JPKP");
    $this->template->view("content/tentang/upload");
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


  function do_upload()
  {
      if ($this->input->is_ajax_request()) {
          $json = array('success' =>false , "alert"=> array(), "file_name"=>array());
          $file = "LEGALITAS-JPKP.".pathinfo($_FILES['foto_personal']['name'], PATHINFO_EXTENSION);

          $config['upload_path'] = "./_template/docs/";
          $config['allowed_types'] = 'pdf';
          $config['overwrite'] = true;
          $config['max_size']  = '10024';
          $config['file_name']  = "$file";


          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('foto_personal')){
              $json['header_alert'] = "error";
              $json['alert'] = "File tidak valid, format berkas harus PDF & ukuran maksimal 10mb";
          }else {
              $data = array("keterangan"=> "upload file $file");
              logs("system","upload",json_encode($data));
              $json['header_alert'] = "success";
              $json['file_name'] = $file;
              $json['alert'] = "File upload successfully.";
              $json['success'] = true;
          }

          echo json_encode($json);

    }
  }

    function download()
    {
      $this->load->helper('download');
      $path = "./_template/docs/LEGALITAS-JPKP.pdf";
      force_download($path, NULL);
    }

    function delete()
    {
      if ($this->input->is_ajax_request()) {
        $json = array('alert_header'=>array(), 'alert'=>array());
        $path = "./_template/docs/LEGALITAS-JPKP.pdf";
        if (file_exists($path)) {
            unlink($path);
            $data = array("keterangan"=> "delete file LEGALITAS-JPKP.pdf");
            logs("system","delete",json_encode($data));
            $json['alert_header'] = "success";
            $json['alert']        = "delete successfully";
        }else {
            $json['alert_header'] = "error";
            $json['alert']        = "delete unsuccessful";
        }
        echo json_encode($json);
      }
    }




}
