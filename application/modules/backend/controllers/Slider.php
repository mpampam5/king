<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Slider extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Slider_model","model");
  }

  function _rules()
  {
    $this->form_validation->set_rules("foto_personal","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("quotes","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
  }

  function index()
  {
    $this->template->set_title("Slider Dashboard");
    $data['row']  = $this->db->get_where("slider",["is_delete"=>"0"])->result();
    $this->template->view("content/slider/index",$data);
  }


  function add()
  {
    $this->template->set_title("Slider Dashboard");
    $data = array('action'  => site_url("backend/slider/add_action"),
                  "button"  => "tambah",
                  "image" => set_value("image"),
                  "quotes" => set_value("quotes"),
                  );
    $this->template->view("content/slider/form",$data);
  }

  function add_action()
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [
                    "image"  => $this->input->post("foto_personal",true),
                    "quotes"  => $this->input->post("quotes",true),
                    "created"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_insert("slider",$data);

          //logs Activity
          $ket_logs = array_merge(["id_aturan"=>$this->db->insert_id()],$data);
          logs("slider","add",json_encode($ket_logs));

          $json['alert'] = "add data successfully";
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
        $image = "slider_".date('dmyhis').".".pathinfo($_FILES['foto_personal']['name'], PATHINFO_EXTENSION);

        $config['upload_path'] = "./_template/files/";
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size']  = '1024';
        $config['file_name']  = "$image";


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_personal')){
            $json['header_alert'] = "error";
            $json['alert'] = "File tidak valid, format file harus jpg|jpeg|png & ukuran maksimal 1mb";
        }else {
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
