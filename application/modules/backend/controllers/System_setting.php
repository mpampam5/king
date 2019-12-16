<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class System_setting extends MY_Controller{
  public function __construct()
  {
    parent::__construct();
    if (profile_admin("level")!="superadmin") {
        redirect(site_url("backend/error/not_permission"),"refresh");
    }
    $this->load->model("System_model","model");
  }

  function index()
  {
    $this->template->set_title("System Setting");
    $this->template->view("content/system/index");
  }

  function edit_system()
  {
    $this->template->set_title("System Setting");
    $this->template->view("content/system/form");
  }

  function action()
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->form_validation->set_rules("title","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
        $this->form_validation->set_rules("telepon","*&nbsp;","trim|xss_clean|numeric|required");
        $this->form_validation->set_rules("email","*&nbsp;","trim|xss_clean|required|valid_email");
        $this->form_validation->set_rules("facebook","*&nbsp;","trim|xss_clean|htmlspecialchars|required|valid_url");
        $this->form_validation->set_rules("alamat","*&nbsp;","trim|xss_clean|required|htmlspecialchars");
        $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');

        if ($this->form_validation->run()) {
          $data = [
                    "title"        => $this->input->post("title",true),
                    "telepon"     => $this->input->post("telepon",true),
                    "facebook"       => $this->input->post("facebook",true),
                    "email"       => $this->input->post("email",true),
                    "alamat"   => $this->input->post('alamat',true),
                  ];

          $this->model->get_update("system",$data,["id"=>999]);

          //logs Activity
          logs("system","update",json_encode($data));

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

  function text_dashboard()
  {
    $this->template->set_title("System Setting");
    $this->template->view("content/system/form_text_dashboard");
  }

  function text_dashboard_action()
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->form_validation->set_rules("text_top","*&nbsp;","trim|xss_clean|required");
        $this->form_validation->set_rules("text_bottom","*&nbsp;","trim|xss_clean|required");
        $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');

        if ($this->form_validation->run()) {
          $data = [
                    "dashboard_tentang"         => $this->input->post("text_top",true),
                    "dashboard_tentang_footer"  => $this->input->post("text_bottom",true),
                  ];

          $this->model->get_update("system",$data,["id"=>999]);

          //logs Activity
          logs("system","update",json_encode($data));

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



  function upload_berkas()
  {
    $this->template->set_title("System Setting");
    $this->template->view("content/system/form_ad_art");
  }


  function do_upload()
  {
      if ($this->input->is_ajax_request()) {
          $json = array('success' =>false , "alert"=> array(), "file_name"=>array());
          $file = "AD-ART-JPKP.".pathinfo($_FILES['foto_personal']['name'], PATHINFO_EXTENSION);

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


  function download_ad_art()
  {
    $this->load->helper('download');
    $path = "./_template/docs/AD-ART-JPKP.pdf";
    force_download($path, NULL);
  }

  function delete_ad_art()
  {
    if ($this->input->is_ajax_request()) {
      $json = array('alert_header'=>array(), 'alert'=>array());
      $path = "./_template/docs/AD-ART-JPKP.pdf";
      if (file_exists($path)) {
          unlink($path);
          $data = array("keterangan"=> "delete file AD-ART-JPKP.pdf");
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
