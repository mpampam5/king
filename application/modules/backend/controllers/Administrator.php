<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Administrator extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Administrator_model","model");
  }

  function _rules()
  {
    $this->form_validation->set_rules("nama","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("level","*&nbsp;","trim|xss_clean|htmlspecialchars|required");
    $this->form_validation->set_rules("telepon","*&nbsp;","trim|xss_clean|required|numeric");
    $this->form_validation->set_rules("is_active","*&nbsp;","trim|xss_clean|required");
    $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
  }

  function index()
  {
    $this->template->set_title("administrator");
    $data['row'] = $this->model->get_data();
    $this->template->view("content/administrator/index",$data);
  }

  function add()
  {
    $this->template->set_title("administrator");
    $data = array('action'  => site_url("backend/administrator/add_action"),
                  "button"  => "tambah",
                  "nama" => set_value("nama"),
                  "telepon" => set_value("telepon"),
                  "email" => set_value("email"),
                  "level" => set_value("level"),
                  "is_active" => set_value("is_active")
                  );
    $this->template->view("content/administrator/form",$data);
  }


  function add_action()
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->form_validation->set_rules('email', '*&nbsp;', 'trim|xss_clean|required|valid_email|is_unique[tb_admin.email]',[
          "is_unique" => " *&nbsp;Sudah digunakan"
        ]);
        $this->form_validation->set_rules('password', '*&nbsp;', 'required|min_length[5]');
        $this->_rules();

        if ($this->form_validation->run()) {
          $this->load->helper('pass_has');
          $token = enc_uri(date('dmYhis'));

          $data = [
                    "nama"        => $this->input->post("nama",true),
                    "telepon"     => $this->input->post("telepon",true),
                    "level"       => $this->input->post("level",true),
                    "email"       => $this->input->post("email",true),
                    "token"       => $token,
                    "password"    => pass_encrypt($token,$this->input->post("password")),
                    "is_active"   => $this->input->post('is_active'),
                    "created"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_insert("tb_admin",$data);

          //logs Activity
          $ket_logs = array_merge(["id_admin"=>$this->db->insert_id()],$data);
          logs("administrator","add",json_encode($ket_logs));

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

  function update($id)
  {
    if ($row = $this->model->get_where("tb_admin",["id_admin"=>dec_uri($id)])) {
      $this->template->set_title("administrator");
      $data = array('action'  => site_url("backend/administrator/update_action/$id"),
                    "button"  => "edit",
                    "nama" => set_value("nama",$row->nama),
                    "telepon" => set_value("telepon",$row->telepon),
                    "email" => set_value("email",$row->email),
                    "level" => set_value("level",$row->level),
                    "is_active" => set_value("is_active",$row->is_active)
                    );
      $this->template->view("content/administrator/form",$data);
    }
  }


  function update_action($id)
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->form_validation->set_rules('email', '*&nbsp;', 'trim|xss_clean|required|valid_email|callback__is_unique_email');
        $this->_rules();

        if ($this->form_validation->run()) {
          $data = [
                    "nama"        => $this->input->post("nama",true),
                    "telepon"     => $this->input->post("telepon",true),
                    "level"       => $this->input->post("level",true),
                    "email"       => $this->input->post("email",true),
                    "is_active"   => $this->input->post('is_active'),
                    "modified"     => date('Y-m-d H:i:s')
                  ];

          $this->model->get_update("tb_admin",$data,["id_admin"=>dec_uri($id)]);

          //logs Activity
          $ket_logs = array_merge(["id_admin"=>dec_uri($id)],$data);
          logs("administrator","update",json_encode($ket_logs));

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


  function reset_password($id)
  {
    if ($row = $this->model->get_where("tb_admin",["id_admin"=>dec_uri($id)])) {
      $this->template->set_title("administrator");
      $data = array('action'  => site_url("backend/administrator/reset_password_action/$id"),
                    "email" => set_value("email",$row->email),
                    );
      $this->template->view("content/administrator/form_reset_pwd",$data);
    }
  }


  function reset_password_action($id)
  {
    if ($this->input->is_ajax_request()) {
        $json = array('success'=>false, 'alert'=>array());
        $this->form_validation->set_rules('password', '*&nbsp;', 'required|min_length[5]');
        $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');
        if ($this->form_validation->run()) {
          $this->load->helper('pass_has');
          $token = enc_uri(date('dmYhis'));

          $data = [
                    "token"       => $token,
                    "password"    => pass_encrypt($token,$this->input->post("password")),
                  ];

          $this->model->get_update("tb_admin",$data,["id_admin"=>dec_uri($id)]);

          //logs Activity
          logs("administrator","reset_password",json_encode(["id_admin"=>dec_uri($id)]));

          $json['alert'] = "Reset password successfully";
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


  function _is_unique_email($str)
  {
    $email_lama = $this->input->post("email_lama");
    $row = $this->db->get_where("tb_admin",["email" => $str,"email !=" => $email_lama]);
    if ($row->num_rows() > 0) {
      $this->form_validation->set_message('_is_unique_email', '&nbsp;*&nbsp;Sudah terdaftar');
      return false;
    }else {
      return true;
    }
  }

  function delete($id)
  {
    if ($this->input->is_ajax_request()) {
      $json = array('alert_header'=>array(), 'alert'=>array());
      if ($this->model->get_update("tb_admin",["is_delete" => "1"],["id_admin" => dec_uri($id)])) {
          //logs Activity
          logs("administrator","delete",json_encode(["id_admin" => dec_uri($id)]));

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
