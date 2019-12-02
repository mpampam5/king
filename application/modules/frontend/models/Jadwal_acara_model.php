<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_acara_model extends CI_Model{

  public function getPosts($limit,$start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('jadwal_acara');
        return $query->result();
    }

    public function getPostsCount()
    {
        $this->db->select('id_jadwal_acara');
        $this->db->from('jadwal_acara');
        return $this->db->count_all_results();
    }

}
