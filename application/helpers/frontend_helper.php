<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

function setting_system($field)
{
  $ci  =& get_instance();
  $qry = $ci->db->get_where("system",["id"=>999]);
  return $qry->row()->$field;
}

function sess($str)
{
   $ci=& get_instance();
  return $ci->session->userdata($str);
}

function struktur_pengurus_title($id)
{
  $ci=get_instance();
  $query = $ci->model->get_where("struktur_pengurus",["id_kepengurusan"=>$id]);
  return $query->title;
}

function status_jabatan($id)
{
  $ci=get_instance();
  $query = $ci->model->get_where("status_jabatan",["id"=>$id]);
  return $query->jabatan;
}


function profile($field)
{
  $ci=& get_instance();
  $qry = $ci->db->select("tb_person.id_person,
                          tb_person.id_kepengurusan,
                          tb_person.kd_person,
                          tb_person.no_sk,
                          tb_person.nik,
                          tb_person.nama,
                          tb_person.tempat_lahir,
                          tb_person.tanggal_lahir,
                          tb_person.jenis_kelamin,
                          tb_person.telepon,
                          tb_person.email,
                          tb_person.alamat,
                          tb_person.id_provinsi,
                          tb_person.id_kabupaten,
                          tb_person.id_kecamatan,
                          tb_person.id_kelurahan,
                          tb_person.foto,
                          tb_person.is_verifikasi,
                          tb_person.is_delete,
                          tb_person.created,
                          tb_person.modified,
                          tb_person.id_jabatan,
                          tb_person.wilayah_keanggotaan,
                          status_jabatan.jabatan,
                          struktur_pengurus.struktur_pengurus")
                  ->from("tb_person")
                  ->join("struktur_pengurus","struktur_pengurus.id_kepengurusan = tb_person.id_kepengurusan","left")
                  ->join("status_jabatan","status_jabatan.id = tb_person.id_jabatan","left")
                  ->where("is_delete","0")
                  ->where("id_person",$ci->session->userdata("id_person"))
                  ->get();
  return $qry->row()->$field;
}


function tampilkan_wilayah($table,$where)
{
  $ci=get_instance();
  $query = $ci->model->get_where($table,$where);
  return $query->name;
}


function rows_table($table)
{
  $date = date("Y-m-d");
  $ci=get_instance();
  return $ci->db->like("created",$date)
                ->get("$table")
                ->num_rows();
}
