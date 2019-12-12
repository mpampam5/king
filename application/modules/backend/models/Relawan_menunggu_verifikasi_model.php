<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan_menunggu_verifikasi_model extends MY_Model{


  var $column_order = array(null, 'tb_person.nik','tb_person.nama','tb_person.email',"tb_person.telepon","struktur_pengurus.struktur_pengurus");
  var $column_search = array('tb_person.nik','tb_person.nama','tb_person.email',"tb_person.id_kepengurusan");
  var $order = array('id_person'=>"DESC");
  var $select = "tb_person.id_person,
                  tb_person.id_kepengurusan,
                  tb_person.nik,
                  tb_person.nama,
                  tb_person.telepon,
                  tb_person.email,
                  struktur_pengurus.struktur_pengurus,
                  tb_person.is_verifikasi,
                  tb_person.is_delete";

  private function _get_datatables_query()
    {

      $this->db->select($this->select);
      $this->db->from("tb_person");
      $this->db->join("struktur_pengurus","struktur_pengurus.id_kepengurusan = tb_person.id_kepengurusan");
      $this->db->where("tb_person.is_verifikasi","0");
      $this->db->where("tb_person.is_delete","0");


        if($this->input->post('nik'))
        {
            $this->db->like('tb_person.nik', $this->input->post('nik'));
        }
        if($this->input->post('nama'))
        {
            $this->db->like('tb_person.nama', $this->input->post('nama'));
        }
        if($this->input->post('email'))
        {
            $this->db->like('tb_person.email', $this->input->post('email'));
        }
        // if($this->input->post('telepon'))
        // {
        //     $this->db->like('tb_person.telepon', $this->input->post('telepon'));
        // }
        if($this->input->post('struktur_pengurus'))
        {
            $this->db->like('tb_person.id_kepengurusan', $this->input->post('struktur_pengurus'));
        }



        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from("tb_person");
        $this->db->join("struktur_pengurus","struktur_pengurus.id_kepengurusan = tb_person.id_kepengurusan");
        $this->db->where("tb_person.is_verifikasi","0");
        $this->db->where("tb_person.is_delete","0");
        return $this->db->count_all_results();
    }


}
