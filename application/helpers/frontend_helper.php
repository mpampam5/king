<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

function setting_system($field)
{
  $ci  =& get_instance();
  $qry = $ci->db->get_where("system",["id"=>999]);
  return $qry->row()->$field;
}

function profile($field)
{
  $ci  =& get_instance();
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
                          tb_person.`password`,
                          tb_person.token,
                          tb_person.is_verifikasi,
                          tb_person.is_delete,
                          tb_person.created,
                          tb_person.modified,
                          struktur_pengurus.struktur_pengurus")
                  ->from("tb_person")
                  ->join("struktur_pengurus","struktur_pengurus.id_kepengurusan = tb_person.id_kepengurusan")
                  ->where("is_delete","0")
                  ->where("id_person",$ci->session->userdata("id_person"))
                  ->get();
  return $qry->row()->$field;
}
