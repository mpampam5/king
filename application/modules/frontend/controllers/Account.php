<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Account extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->template->set_title("account");
    $this->template->view("content/account/index");
  }

  function do_upload()
  {
      if ($this->input->is_ajax_request()) {
          $json = array('success' =>false , "alert"=> array(), "file_name"=>array());
          $image = "foto_".enc_uri(1).".".pathinfo($_FILES['foto_personal']['name'], PATHINFO_EXTENSION);

          $config['upload_path'] = "./_template/profiles/";
          $config['allowed_types'] = 'jpg|jpeg';
          $config['overwrite'] = true;
          $config['max_size']  = '1024';
          $config['file_name']  = "$image";


          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('foto_personal')){
              $json['header_alert'] = "error";
              $json['alert'] = "File tidak valid, format file harus jpeg & ukuran maksimal 1mb";
          }else {
           $config2['image_library'] = 'gd2';
           $config2['source_image'] = "./_template/profiles/$image";
           $config2['new_image'] = "./_template/profiles/thumbs/$image";
           $config2['create_thumb'] = false;
           $config2['maintain_ratio'] = TRUE;
           $config2['width'] = 100;
           $config2['height'] = 200;
           // Load the Library
           $this->load->library('image_lib', $config2);
           // resize image
           $this->image_lib->resize();

              // $where = array('id_person' => sess("id_person"));
              // $this->model->get_update("tb_person",["file_foto"=>$image],$where);
              $json['header_alert'] = "success";
              $json['file_name'] = $image;
              $json['alert'] = "File upload successfully.";
              $json['success'] = true;
          }

          echo json_encode($json);

    }
  }

}
