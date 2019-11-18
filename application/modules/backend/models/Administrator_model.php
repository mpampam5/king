<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_model extends MY_Model{

  function get_data(){
    $qry = $this->db->select("tb_admin.id_admin,
                              tb_admin.nama,
                              tb_admin.telepon,
                              tb_admin.email,
                              tb_admin.username,
                              tb_admin.`level`,
                              tb_admin.is_active,
                              tb_admin.is_delete")
                    ->from("tb_admin")
                    ->where("is_delete","0")
                    ->order_by("tb_admin.id_admin","desc")
                    ->get();
    return $qry;
  }

}
