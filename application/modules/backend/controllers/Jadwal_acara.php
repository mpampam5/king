<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Jadwal_acara extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Jadwal_acara_model","model");
  }

  function _rules()
  {
    $this->form_validation->set_rules("title","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("tanggal","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("jam","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
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
      $row[] = "<span class='badge badge-primary'><i class='fas fa-calendar'></i> ".date("d/m/Y",strtotime($rows->tanggal))." ".date("H:i",strtotime($rows->pukul))."</span>";
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


  function add()
  {
    $this->template->set_title("Jadwal Acara");
    $data = array('action'  => site_url("backend/jadwal_acara/add_action"),
                  "button"  => "tambah",
                  "title" => set_value("title"),
                  "tanggal" => set_value("tanggal"),
                  "jam" => set_value("jam"),
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
                    "pukul"  => $this->input->post("jam",true),
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


}
