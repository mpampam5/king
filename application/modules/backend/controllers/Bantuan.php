<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Bantuan extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    if (profile_admin("level")!="superadmin") {
        redirect(site_url("backend/error/not_permission"),"refresh");
    }
    $this->load->model("Bantuan_model","model");
  }

  function _rules()
  {
    $this->form_validation->set_rules("keterangan","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
  }

  function index()
  {
    $this->template->set_title("Bantuan Khusus");
    $this->template->view("content/bantuan/index");
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
      $row[] = date("d/m/Y H:i",strtotime($rows->created));
      $row[] = substr($rows->keterangan,0,60)."...";
      $row[] = '<a href="'.site_url("backend/bantuan/detail/".enc_uri($rows->id_bantuan_khusus)).'" id="detail" class="btn btn-xs btn-primary"><i class="fas fa-file-alt"></i> Detail</a>&nbsp;
                <a href="'.site_url("backend/bantuan/edit/".enc_uri($rows->id_bantuan_khusus)).'" class="btn btn-xs btn-warning"><i class="fas fa-pen-square"></i> Edit</a>&nbsp;
                <a href="'.site_url("backend/bantuan/delete/".enc_uri($rows->id_bantuan_khusus)).'" id="delete" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>&nbsp;
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
  if ($row = $this->model->get_where("bantuan_khusus",["id_bantuan_khusus"=>dec_uri($id)])) {
    $this->template->set_title("Bantuan Khusus");
    $data = array("created" => $row->created, "keterangan" =>$row->keterangan);
    $this->template->view("content/bantuan/detail",$data,false);
  }
}




  function add()
  {
    $this->template->set_title("Bantuan Khusus");
    $data = array('action'  => site_url("backend/bantuan/add_action"),
                  "button"  => "tambah",
                  "keterangan" => set_value("keterangan"),
                  );
    $this->template->view("content/bantuan/form",$data);
  }


  function add_action()
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [
                    "keterangan"  => $this->input->post("keterangan",true),
                    "created"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_insert("bantuan_khusus",$data);

          //logs Activity
          $ket_logs = array_merge(["id_bantuan_khusus"=>$this->db->insert_id()],$data);
          logs("bantuan_khusus","add",json_encode($ket_logs));

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
    if ($row = $this->model->get_where("bantuan_khusus",["id_bantuan_khusus"=>dec_uri($id)])) {
      $this->template->set_title("Bantuan Khusus");
      $data = array('action'  => site_url("backend/bantuan/edit_action/$id"),
                    "button"  => "edit",
                    "keterangan" => set_value("keterangan",$row->keterangan),
                    );
      $this->template->view("content/bantuan/form",$data);
    }
  }


  function edit_action($id)
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [
                    "keterangan"  => $this->input->post("keterangan",true),
                    "modified"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_update("bantuan_khusus",$data,["id_bantuan_khusus"=>dec_uri($id)]);

          //logs Activity
          $ket_logs = array_merge(["id_bantuan_khusus"=>dec_uri($id)],$data);
          logs("bantuan_khusus","update",json_encode($ket_logs));

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
      if ($this->model->get_update("bantuan_khusus",["modified" => date('Y-m-d H:i:s'), "is_delete" => "1"],["id_bantuan_khusus" => dec_uri($id)])) {
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
