<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

function setting_system($field)
{
  $ci  =& get_instance();
  $qry = $ci->db->get_where("system",["id"=>999]);
  return $qry->row()->$field;
}
