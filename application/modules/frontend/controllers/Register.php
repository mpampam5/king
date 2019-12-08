<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library(array("form_validation"));
  }

  function index()
  {
    $data['struktur_pengurus'] =  $this->db->get("struktur_pengurus")->result();
    $data["provinsi"] = $this->db->get("wil_provinsi")->result();
    $this->load->view("register",$data);
  }


  function action()
  {
    if ($this->input->is_ajax_request()) {
      $json = array('success'=>false, 'alert'=>array());
      $this->form_validation->set_rules("struktur_pengurus","*&nbsp;","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("nama","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
      $this->form_validation->set_rules("nik","*&nbsp;","trim|xss_clean|numeric|required|min_length[16]|max_length[16]|callback__cek_nik");
      $this->form_validation->set_rules("tempat_lahir","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
      $this->form_validation->set_rules("tanggal_lahir","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
      $this->form_validation->set_rules("jenis_kelamin","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
      $this->form_validation->set_rules("alamat","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
      $this->form_validation->set_rules("provinsi","*&nbsp;","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("kabupaten","*&nbsp;","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("kecamatan","*&nbsp;","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("kelurahan","*&nbsp;","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("telepon","*&nbsp;","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("email","*&nbsp;","trim|xss_clean|valid_email|required|callback__cek_email");
      $this->form_validation->set_rules("password","*&nbsp;","trim|xss_clean|min_length[6]|required");
      $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');


      if ($this->form_validation->run()) {
        $this->load->helper(array("enc_gue","pass_has"));
        $token = enc_uri(date("dmYhis"));
        $password = $this->input->post("password",true);
        $generate = pass_encrypt($token,$password);
        $data = array('id_kepengurusan' => $this->input->post("struktur_pengurus",true) ,
                      'nik' => $this->input->post("nik",true),
                      'nama' => $this->input->post("nama",true),
                      'tempat_lahir' => $this->input->post("tempat_lahir",true),
                      'tanggal_lahir' => date("Y-m-d",strtotime($this->input->post("tanggal_lahir",true))),
                      'jenis_kelamin' => $this->input->post("jenis_kelamin",true),
                      'telepon' => $this->input->post("telepon",true),
                      'alamat' => $this->input->post("alamat",true),
                      'email' => $this->input->post("email",true),
                      'password' => $generate,
                      'token' => $token,
                      'id_provinsi' => $this->input->post("provinsi",true),
                      'id_kabupaten' => $this->input->post("kabupaten",true),
                      'id_kecamatan' => $this->input->post("kecamatan",true),
                      'id_kelurahan' => $this->input->post("kelurahan",true),
                      'created' => date("Y-m-d H:i:s"),
                      );

        $this->db->insert("tb_person",$data);
        $this->session->set_flashdata("reg_success",'<p style="font-weight:bold;" class="text-center mb-3">Register Berhasil! Silahkan Login.</p>');
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


  function _cek_nik($str)
  {
    $where =  array("nik"=>$str);
        if ($this->db->get_where("tb_person",$where)->row()) {
          $this->form_validation->set_message('_cek_nik', '*&nbsp;sudah terdaftar');
          return false;
        } else {
          return true;
        }
  }


  function _cek_email($str)
  {
    $where =  array("email"=>$str);
        if ($this->db->get_where("tb_person",$where)->row()) {
          $this->form_validation->set_message('_cek_email', '*&nbsp;sudah terdaftar');
          return false;
        } else {
          return true;
        }
  }


  function kabupaten(){
        $propinsiID = $_GET['id'];
        $kabupaten   = $this->db->get_where('wil_kabupaten',array('province_id'=>$propinsiID));
        echo '<option value="">-- Pilih Kabupaten/Kota --</option>';
        foreach ($kabupaten->result() as $k)
        {
            echo "<option value='$k->id'>$k->name</option>";
        }
    }


    function kecamatan(){
       $kabupatenID = $_GET['id'];
       $kecamatan   = $this->db->get_where('wil_kecamatan',array('regency_id'=>$kabupatenID));
       echo '<option value="">-- Pilih Kecamatan --</option>';
       foreach ($kecamatan->result() as $k)
       {
           echo "<option value='$k->id'>$k->name</option>";
       }
   }

   function kelurahan(){
        $kecamatanID  = $_GET['id'];
        $desa         = $this->db->get_where('wil_kelurahan',array('district_id'=>$kecamatanID));
        echo '<option value="">-- Pilih Kelurahan/Desa --</option>';
        foreach ($desa->result() as $d)
        {
            echo "<option value='$d->id'>$d->name</option>";
        }
    }

}
