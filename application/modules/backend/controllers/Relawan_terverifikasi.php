<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Relawan_terverifikasi extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Relawan_terverifikasi_model","model");
  }


  function index()
  {
    $this->template->set_title("Relawan Terdaftar");
    $this->template->view("content/relawan_terverifikasi/index");
  }

  function json()
  {
    if ($this->input->is_ajax_request()) {
      $list = $this->model->get_datatables();
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $rows) {

          if ($rows->foto=="") {
            $foto = base_url().'_template/avatar_default.jpg';
            $foto_thumbs = base_url().'_template/avatar_default.jpg';
          }else {
            $foto = base_url().'_template/profiles/thumbs/'.$rows->foto;
            $foto_thumbs = base_url().'_template/profiles/'.$rows->foto;
          }

          $row = array();
          $row[] = '<figure class="profile-picture"><a href="'.$foto_thumbs.'" data-fancybox="gallery" class="image-popup-no-margins"><img width="50" height="50" src="'.$foto.'" alt="image" class="rounded-circle"></a></figure>';
          $row[] = $rows->no_sk;
          $row[] = '<span><i class="fas fa-id-card"></i> '.$rows->nik.'</span><br>
                    <span><i class="fas fa-user"></i> '.$rows->nama.'</span><br>
                    <span><i class="fas fa-envelope"></i> '.$rows->email.'</span><br>
                    <span><i class="fas fa-phone"></i> '.$rows->telepon.'</span><br>
                    ';

          // $row[] = $rows->telepon;
          $row[] = '<span class="text-primary"><i class="fas fa-circle"></i> '.strtoupper($rows->struktur_pengurus).'</span><br>
                    <span class="text-primary"><i class="fas fa-circle"></i> '.strtoupper($rows->jabatan).'</span><br>
                    <span class="text-primary"><i class="fas fa-circle"></i> '.tampilkan_wilayah("wil_provinsi",["id"=>$rows->wilayah_keanggotaan]).'</span>
                    ';


          $row[] = '<a href="'.site_url("backend/relawan_terverifikasi/detail/".enc_uri($rows->id_person)).'" class="btn btn-sm btn-success mb-1" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="DETAIL"><i class="fas fa-search-plus"></i></a><br>
                    <a href="'.site_url("backend/relawan_terverifikasi/detail/".enc_uri($rows->id_person)).'" class="btn btn-sm btn-warning mb-1" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="EDIT"><i class="fas fa-pen-square"></i></a><br>
                    <a href="'.site_url("backend/relawan_terverifikasi/delete/".enc_uri($rows->id_person)).'" id="delete" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="DELETE"><i class="fas fa-trash"></i></a><br>
                    ';

          $data[] = $row;
      }

      $output = array(
                      "draw" => $_POST['draw'],
                      "recordsTotal" => $this->model->count_all(),
                      "recordsFiltered" => $this->model->count_filtered(),
                      "data" => $data,
              );
      //output to json format
      echo json_encode($output);
    }
  }


  function detail($id="")
  {
    if ($id!="") {
      if ($row = $this->model->get_where("tb_person",["is_verifikasi"=>"1","is_delete"=>"0","id_person"=>dec_uri($id)])) {
        $this->template->set_title("Relawan Terdaftar");
        $data['row'] = $row;
        $this->template->view("content/relawan_terverifikasi/detail",$data);
      }
    }
  }


  function verifikasi($id="")
  {
    if ($id!="") {
        if ($this->input->is_ajax_request()) {
          $json = array('success'=>false, 'alert'=>array());
          $this->form_validation->set_rules("no_id","*&nbsp;","trim|xss_clean|htmlspecialchars|required|callback__cek_no_id");
          $this->form_validation->set_rules("no_sk","*&nbsp;","trim|xss_clean|htmlspecialchars|required|callback__cek_sk");
          $this->form_validation->set_rules("status_jabatan","*&nbsp;","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("wilayah_keanggotaan","*&nbsp;","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("password","*&nbsp;","trim|xss_clean|htmlspecialchars|required|callback__cek_password",[
            "required" => "*&nbsp; Silahkan masukkan password untuk mengetahui bahwa anda benar pemilik akun ini"
          ]);
          $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');

          if ($this->form_validation->run()) {
              $data = array('kd_person' => $this->input->post("no_id",true),
                            'no_sk' => $this->input->post("no_sk",true),
                            'id_jabatan' => $this->input->post("status_jabatan",true),
                            'wilayah_keanggotaan' => $this->input->post("wilayah_keanggotaan",true),
                            'is_verifikasi' => "1"
                            );

              $this->model->get_update("tb_person",$data,["id_person"=>dec_uri($id)]);

              $ket_logs = array_merge(["id_person"=>dec_uri($id)],$data);
              logs("relawan_terdaftar","verifikasi",json_encode($ket_logs));

              $json['alert'] = "Relawan Berhasil di verifikasi";
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

    function _cek_no_id($str)
    {
      $where =  array("kd_person"=>$str,"is_delete"=>"0","is_verifikasi"=>"1");
          if ($this->db->get_where("tb_person",$where)->row()) {
            $this->form_validation->set_message('_cek_no_id', '*&nbsp;sudah ada');
            return false;
          } else {
            return true;
          }
    }

    function _cek_sk($str)
    {
      $where =  array("no_sk"=>$str,"is_delete"=>"0","is_verifikasi"=>"1");
          if ($this->db->get_where("tb_person",$where)->row()) {
            $this->form_validation->set_message('_cek_sk', '*&nbsp;sudah ada');
            return false;
          } else {
            return true;
          }
    }

    function delete($id)
    {
      if ($this->input->is_ajax_request()) {
        $json = array('alert_header'=>array(), 'alert'=>array());
        if ($this->model->get_update("tb_person",["modified" => date('Y-m-d H:i:s'), "is_delete" => "1"],["id_person" => dec_uri($id)])) {
            //logs Activity
            logs("relawan_terdaftar","delete",json_encode(["id_person" => dec_uri($id)]));

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
