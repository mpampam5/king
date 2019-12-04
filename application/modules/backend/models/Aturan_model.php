<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan_model extends MY_Model{

  public function filter($limit, $start, $order_field, $order_ascdesc){
    $this->db->where("is_delete","0");
    $this->db->order_by($order_field, $order_ascdesc);
    $this->db->limit($limit, $start);
    return $this->db->get('aturan')->result();
  }

  public function count_all(){
    $this->db->where("is_delete","0");
    return $this->db->count_all('aturan');
  }

  public function count_filter(){
    $this->db->where("is_delete","0");
    return $this->db->get('aturan')->num_rows();
  }


}
