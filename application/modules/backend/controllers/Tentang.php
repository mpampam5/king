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
    $this->form_validation->set_rules("keterangan","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
  }

  function index()
  {
    $this->template->set_title("Tentang JPKP");
    $data['row']  = $this->db->get_where("tentang")->result();
    $this->template->view("content/tentang/index",$data);
  }


  function add()
  {
    $this->template->set_title("Tentang JPKP");
    $data = array('action'  => site_url("backend/tentang/add_action"),
                  "button"  => "tambah",
                  "image" => set_value("image"),
                  "quotes" => set_value("quotes"),
                  );
    $this->template->view("content/tentang/form",$data);
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

          $this->model->get_insert("tentang",$data);

          //logs Activity
          $ket_logs = array_merge(["id_tentang"=>$this->db->insert_id()],$data);
          logs("tentang","add",json_encode($ket_logs));

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

  function edit($id)
  {
    if ($row = $this->model->get_where("tentang",["id_tentang"=>dec_uri($id)])) {
      $this->template->set_title("tentang Dashboard");
      $data = array('action'  => site_url("backend/tentang/update_action/$id"),
                    "button"  => "edit",
                    "image" => set_value("image",$row->image),
                    "quotes" => set_value("quotes",$row->quotes),
                    );
      $this->template->view("content/tentang/form",$data);
    }
  }


  function update_action($id)
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [
                    "image"  => $this->input->post("foto_personal",true),
                    "quotes"  => $this->input->post("quotes",true),
                    "modified"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_update("tentang",$data,["id_tentang"=>dec_uri($id)]);

          //logs Activity
          $ket_logs = array_merge(["id_tentang"=>dec_uri($id)],$data);
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





    function delete($id)
    {
      if ($this->input->is_ajax_request()) {
        $json = array('alert_header'=>array(), 'alert'=>array());
        if ($this->model->get_update("tentang",["modified" => date('Y-m-d H:i:s'), "is_delete" => "1"],["id_tentang" => dec_uri($id)])) {
            //logs Activity
            logs("tentang","delete",json_encode(["id_tentang" => dec_uri($id)]));

            $json['alert_header'] = "success";
            $json['alert']        = "delete successfully";
        }else {
            $json['alert_header'] = "error";
            $json['alert']        = "delete unsuccessful";
        }


        echo json_encode($json);
      }
    }














function do_upload()
{
    if ($this->input->is_ajax_request()) {
        $json = array('success' =>false , "alert"=> array(), "file_name"=>array());
        $image = "tentang_".date('dmyhis').".".pathinfo($_FILES['foto_personal']['name'], PATHINFO_EXTENSION);

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
