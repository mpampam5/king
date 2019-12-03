<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/frontend/core/MY_Controller.php";
class Jadwal_acara extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Jadwal_acara_model","model");
  }

  function index()
  {
    $this->template->set_title("information");
    $this->template->view('content/jadwal_acara/index');
  }

function fetch()
 {
  $output = '';
  $data = $this->model->fetch_data($this->input->post('limit'), $this->input->post('start'));
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {

     if ($row->sampai_tanggal==="1970-01-01") {
         $tgl_selesai = "selesai";
     }else {
        $tgl_selesai = long_indo($row->sampai_tanggal);
     }

     if ($row->sampai_pukul=="00:00:00") {
       $sampai_pukul = "selesai";
     }else {
       $sampai_pukul = date("H:i",strtotime($row->sampai_pukul));
     }

    $output .= '<div class="col-md-12 content">
                  <h6 class="text-center text-danger" style="font-size:12px;">'.$row->title.'</h6>
                  <b>Detail Acara :</b>
                  <table>
                    <tr>
                      <td>Tanggal</td>
                      <td>: '.long_indo($row->tanggal).'&nbsp;-&nbsp;'.$tgl_selesai.'
                      </td>
                    </tr>

                    <tr>
                      <td>Pukul</td>
                      <td>: '.date("H:i",strtotime($row->pukul)).'  - '.$sampai_pukul.' '.strtoupper($row->zona_waktu).'</td>
                    </tr>

                    <tr>
                      <td>Alamat</td>
                      <td>: '.$row->alamat.'</td>
                    </tr>
                  </table>
              </div>';
   }
  }
  echo $output;
 }



}
