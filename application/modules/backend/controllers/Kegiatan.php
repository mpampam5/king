<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class kegiatan extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    if (profile_admin("level")!="superadmin") {
        redirect(site_url("backend/error/not_permission"),"refresh");
    }
    $this->load->model("Kegiatan_model","model");
  }

  function _rules()
  {
    $this->form_validation->set_rules("title","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("foto_personal","*&nbsp;","trim|xss_clean|htmlspecialchars");
    $this->form_validation->set_rules("link_terkait","*&nbsp;","trim|xss_clean|htmlspecialchars");
    $this->form_validation->set_rules("keterangan","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
  }

  function index()
  {
    $this->template->set_title("Kegiatan");
    $this->template->view("content/kegiatan/index");
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
      $row[] = substr($rows->title,0,100)."...";
      $row[] = '

                <a href="'.site_url("backend/kegiatan/edit/".enc_uri($rows->id_kegiatan)).'" class="btn btn-xs btn-warning"><i class="fas fa-pen-square"></i> Edit</a>&nbsp;
                <a href="'.site_url("backend/kegiatan/delete/".enc_uri($rows->id_kegiatan)).'" id="delete" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>&nbsp;
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
  if ($row = $this->model->get_where("kegiatan",["id_kegiatan"=>dec_uri($id)])) {
    $this->template->set_title("Kegiatan");
    $data = array("created" => $row->created, "keterangan" =>$row->keterangan);
    $this->template->view("content/kegiatan/detail",$data,false);
  }
}




  function add()
  {
    $this->template->set_title("Kegiatan");
    $data = array('action'  => site_url("backend/kegiatan/add_action"),
                  "button"  => "tambah",
                  "title" => set_value("title"),
                  "image" => set_value("image"),
                  "link_terkait" => set_value("link_terkait"),
                  "keterangan" => set_value("keterangan"),
                  );
    $this->template->view("content/kegiatan/form",$data);
  }


  function add_action()
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [ "title"  => $this->input->post("title",true),
                    "image"  => $this->input->post("foto_personal",true),
                    "link_terkait"  => $this->input->post("link_terkait",true),
                    "keterangan"  => $this->input->post("keterangan",true),
                    "created"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_insert("kegiatan",$data);

          //logs Activity
          $ket_logs = array_merge(["id_kegiatan"=>$this->db->insert_id()],$data);
          logs("kegiatan","add",json_encode($ket_logs));

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
    if ($row = $this->model->get_where("kegiatan",["id_kegiatan"=>dec_uri($id)])) {
      $this->template->set_title("Kegiatan");
      $data = array('action'  => site_url("backend/kegiatan/edit_action/$id"),
                    "button"  => "edit",
                    "title" => set_value("title",$row->title),
                    "image" => set_value("image",$row->image),
                    "link_terkait" => set_value("link_terkait",$row->link_terkait),
                    "keterangan" => set_value("keterangan",$row->keterangan),
                    );
      $this->template->view("content/kegiatan/form",$data);
    }
  }


  function edit_action($id)
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->_rules();
        if ($this->form_validation->run()) {

          $data = [ "title"  => $this->input->post("title",true),
                    "link_terkait"  => $this->input->post("link_terkait",true),
                    "image"  => $this->input->post("foto_personal",true),
                    "keterangan"  => $this->input->post("keterangan",true),
                    "modified"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_update("kegiatan",$data,["id_kegiatan"=>dec_uri($id)]);

          //logs Activity
          $ket_logs = array_merge(["id_kegiatan"=>dec_uri($id)],$data);
          logs("kegiatan","update",json_encode($ket_logs));

          $foto_lama = $this->input->post("foto_personal_lama");
          if ($this->input->post("foto_personal")!=$foto_lama) {
            if ($foto_lama!="") {
              if (file_exists("./_template/profiles/$foto_lama")) {
                  unlink("./_template/profiles/$foto_lama");
              }
            }
          }

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
      if ($this->model->get_update("kegiatan",["modified" => date('Y-m-d H:i:s'), "is_delete" => "1"],["id_kegiatan" => dec_uri($id)])) {
          //logs Activity
          logs("kegiatan","delete",json_encode(["id_kegiatan" => dec_uri($id)]));

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
          $image = "kegiatan_".date('dmyhis').".".pathinfo($_FILES['foto_personal']['name'], PATHINFO_EXTENSION);

          $config['upload_path'] = "./_template/files/";
          $config['allowed_types'] = 'jpg|jpeg';
          $config['overwrite'] = true;
          $config['max_size']  = '1024';
          $config['file_name']  = "$image";


          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('foto_personal')){
              $json['header_alert'] = "error";
              $json['alert'] = "File tidak valid, format file harus jpg|jpeg & ukuran maksimal 1mb";
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
