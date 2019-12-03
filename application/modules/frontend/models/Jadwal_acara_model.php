<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_acara_model extends CI_Model{

function fetch_data($limit, $start)
 {
  $this->db->select("*");
  $this->db->from("jadwal_acara");
  $this->db->where("is_delete","0");
  $this->db->order_by("id_jadwal_acara", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

}
