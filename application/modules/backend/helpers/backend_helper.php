<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
if ( ! function_exists('sess'))
{
  function sess($str)
  {
     $ci=& get_instance();
    return $ci->session->userdata($str);
  }
}

function setting_system($field)
{
  $ci  =& get_instance();
  $qry = $ci->db->get_where("system",["id"=>999]);
  return $qry->row()->$field;
}

if ( ! function_exists('profile_admin'))
{
  function profile_admin($field)
  {
     $ci=& get_instance();
     $qry = $ci->db->get_where("tb_admin",["id_admin"=>$ci->session->userdata("id_admin")]);
     return $qry->row()->$field;
  }
}


if (! function_exists("logs")) {
    function logs($module = "", $type = "", $ket = "")
    {
      $ci=& get_instance();
      $ci->load->library('user_agent');

      $data = [ "admin_id" => $ci->session->userdata("id_admin"),
                "ip_address" => $ci->input->ip_address(),
                "module"  => $module,
                "action" => $type,
                "keterangan" => $ket,
                "created" => date("Y-m-d H:i:s")
              ];

      $ci->db->insert("logs",$data);
    }
}

function tampilkan_wilayah($table,$where)
{
  $ci=get_instance();
  $query = $ci->model->get_where($table,$where);
  return $query->name;
}

function struktur_pengurus($id)
{
  $ci=get_instance();
  $query = $ci->model->get_where("struktur_pengurus",["id_kepengurusan"=>$id]);
  return $query->struktur_pengurus;
}

function status_jabatan($id)
{
  $ci=get_instance();
  $query = $ci->model->get_where("status_jabatan",["id"=>$id]);
  return $query->jabatan;
}
