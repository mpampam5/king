<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
if ( ! function_exists('sess'))
{
  function sess($str)
  {
     $ci=& get_instance();
    return $ci->session->userdata($str);
  }
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
