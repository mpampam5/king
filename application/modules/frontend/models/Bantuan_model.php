<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function fetch_data($limit, $start)
   {
    $this->db->select("*");
    $this->db->from("bantuan_khusus");
    $this->db->where("is_delete","0");
    $this->db->order_by("id_bantuan_khusus", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query;
   }

}
