<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Jadwal_acara extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    if (profile_admin("level")!="superadmin") {
        redirect(site_url("backend/error/not_permission"),"refresh");
    }
    $this->load->model("Jadwal_acara_model","model");
  }

  function _rules()
  {
    $this->form_validation->set_rules("title","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("tanggal","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("sampai_tanggal","*&nbsp;","trim|xss_clean|htmlspecialchars");
    $this->form_validation->set_rules("jam","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("sampai_jam","*&nbsp;","trim|xss_clean|htmlspecialchars");
    $this->form_validation->set_rules("timezone","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("alamat","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
  }

  function index()
  {
    $this->template->set_title("Jadwal Acara");
    $this->template->view("content/jadwal_acara/index");
  }

  function json(){
    //$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
    $limit = $_POST['length']; // Ambil data limit per page
    $start = $_POST['start']; // Ambil data start
    $order_index = $_POST['order'][0]['column'];
    $order_field = $_POST['columns'][$order_index]['data'];
    $order_ascdesc = $_POST['order'][0]['dir'];
    $sql_total = $this->model->count_all();
    $sql_data = $this->model->filter($limit, $start, $order_field, $order_ascdesc);
    $sql_filter = $this->model->count_filter();

    $data = array();
    $no = $start;
    foreach ($sql_data as $rows) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = "<span class='badge badge-primary'><i class='fas fa-calendar'></i> ".date("d/m/Y",strtotime($rows->tanggal))." ".date("H:i",strtotime($rows->pukul))." ".strtoupper($rows->zona_waktu)."</span>";
      $row[] = substr($rows->title,0,80)."...";
      $row[] = '<a href="'.site_url("backend/jadwal_acara/detail/".enc_uri($rows->id_jadwal_acara)).'" id="detail" class="btn btn-xs btn-primary"><i class="fas fa-file-alt"></i> Detail</a>&nbsp;
                <a href="'.site_url("backend/jadwal_acara/edit/".enc_uri($rows->id_jadwal_acara)).'" class="btn btn-xs btn-warning"><i class="fas fa-pen-square"></i> Edit</a>&nbsp;
                <a href="'.site_url("backend/jadwal_acara/delete/".enc_uri($rows->id_jadwal_acara)).'" id="delete" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>&nbsp;
                ';

      $data[] = $row;
    }


    $callback = array(
        'draw'=>$_POST['draw'], // Ini dari datatablenya
        'recordsTotal'=>$sql_total,
        'recordsFiltered'=>$sql_filter,
        'data'=>$data
    );
    header('Content-Type: application/json');
    echo json_encode($callback); // Convert array $callback ke json
}

function detail($id)
{
  if ($row = $this->model->get_where("jadwal_acara",["id_jadwal_acara"=>dec_uri($id)])) {
    $this->template->set_title("Bantuan Khusus");
    $data = array(  "title" => set_value("title",$row->title),
                    "tanggal" => set_value("tanggal",date("d/m/Y",strtotime($row->tanggal))),
                    "sampai_tanggal" => set_value("sampai_tanggal",$row->sampai_tanggal != "1970-01-01" ? date("d/m/Y",strtotime($row->sampai_tanggal)) : ""),
                    "jam" => set_value("jam",$row->pukul),
                    "sampai_jam" => set_value("sampai_jam", $row->sampai_pukul!="00:00:00" ? $row->sampai_pukul : "" ),
                    "zona_waktu" => set_value("zona_waktu",$row->zona_waktu),
                    "alamat" => set_value("alamat",$row->alamat),
                  );
    $this->template->view("content/jadwal_acara/detail",$data,false);
  }
}


  function add()
  {
    $this->template->set_title("Jadwal Acara");
    $data = array('action'  => site_url("backend/jadwal_acara/add_action"),
                  "button"  => "tambah",
                  "title" => set_value("title"),
                  "tanggal" => set_value("tanggal"),
                  "sampai_tanggal" => set_value("tanggal"),
                  "jam" => set_value("jam"),
                  "sampai_jam" => set_value("sampai_jam"),
                  "zona_waktu" => set_value("zona_waktu"),
                  "alamat" => set_value("alamat"),
                  );
    $this->template->view("content/jadwal_acara/form",$data);
  }

  function add_action()
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [ "title"  => $this->input->post("title",true),
                    "tanggal"  => date("Y-m-d", strtotime($this->input->post("tanggal",true))),
                    "sampai_tanggal"  => date("Y-m-d", strtotime($this->input->post("sampai_tanggal",true))),
                    "pukul"  => $this->input->post("jam",true),
                    "sampai_pukul"  => $this->input->post("sampai_jam",true),
                    "zona_waktu"  => $this->input->post("timezone",true),
                    "alamat"  => $this->input->post("alamat",true),
                    "created"  => date('Y-m-d H:i:s')
                  ];

          $this->model->get_insert("jadwal_acara",$data);

          //logs Activity
          $ket_logs = array_merge(["id_jadwal_acara"=>$this->db->insert_id()],$data);
          logs("jadwal_acara","add",json_encode($ket_logs));

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
    if ($row = $this->model->get_where("jadwal_acara",["id_jadwal_acara"=>dec_uri($id)])) {
      $this->template->set_title("Jadwal Acara");
      $data = array('action'  => site_url("backend/jadwal_acara/edit_action/$id"),
                    "button"  => "edit",
                    "title" => set_value("title",$row->title),
                    "tanggal" => set_value("tanggal",date("d/m/Y",strtotime($row->tanggal))),
                    "sampai_tanggal" => set_value("sampai_tanggal",$row->sampai_tanggal != "1970-01-01" ? date("d/m/Y",strtotime($row->sampai_tanggal)) : ""),
                    "jam" => set_value("jam",$row->pukul),
                    "sampai_jam" => set_value("sampai_jam", $row->sampai_pukul!="00:00:00" ? $row->sampai_pukul : "" ),
                    "zona_waktu" => set_value("zona_waktu",$row->zona_waktu),
                    "alamat" => set_value("alamat",$row->alamat),
                    );
      $this->template->view("content/jadwal_acara/form",$data);
    }
  }


  function edit_action($id)
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [ "title"  => $this->input->post("title",true),
                    "tanggal"  => date("Y-m-d", strtotime($this->input->post("tanggal",true))),
                    "sampai_tanggal"  => date("Y-m-d", strtotime($this->input->post("sampai_tanggal",true))),
                    "pukul"  => $this->input->post("jam",true),
                    "sampai_pukul"  => $this->input->post("sampai_jam",true),
                    "zona_waktu"  => $this->input->post("timezone",true),
                    "alamat"  => $this->input->post("alamat",true),
                    "modified"  => date('Y-m-d H:i:s')
                  ];

          $this->model->get_update("jadwal_acara",$data,["id_jadwal_acara"=>dec_uri($id)]);

          //logs Activity
          $ket_logs = array_merge(["id_jadwal_acara"=>dec_uri($id)],$data);
          logs("jadwal_acara","update",json_encode($ket_logs));

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
      if ($this->model->get_update("jadwal_acara",["modified" => date('Y-m-d H:i:s'), "is_delete" => "1"],["id_jadwal_acara" => dec_uri($id)])) {
          //logs Activity
          logs("bantuan_khusus","delete",json_encode(["id_bantuan_khusus" => dec_uri($id)]));

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
