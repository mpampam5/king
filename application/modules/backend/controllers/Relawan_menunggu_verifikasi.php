<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Relawan_menunggu_verifikasi extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Relawan_menunggu_verifikasi_model","model");
  }


  function index()
  {
    $this->template->set_title("Relawan Terdaftar");
    $this->template->view("content/relawan_menunggu_verifikasi/index");
  }

  function json()
  {
    if ($this->input->is_ajax_request()) {
      $list = $this->model->get_datatables();
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $rows) {

          $row = array();
          $row[] = '<span>'.$rows->nik.'</span>';
          $row[] = $rows->nama;
          $row[] = $rows->email;
          // $row[] = $rows->telepon;
          $row[] = '<label class="text-primary">'.strtoupper($rows->struktur_pengurus).'</label>';


          $row[] = '<a href="'.site_url("backend/relawan_menunggu_verifikasi/detail/".enc_uri($rows->id_person)).'" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="DETAIL"><i class="fas fa-file"></i> Detail & Verifikasi</a>
                    ';

          $data[] = $row;
      }

      $output = array(
                      "draw" => $_POST['draw'],
                      "recordsTotal" => $this->model->count_all(),
                      "recordsFiltered" => $this->model->count_filtered(),
                      "data" => $data,
              );
      //output to json format
      echo json_encode($output);
    }
  }


  function detail($id="")
  {
    if ($id!="") {
      if ($row = $this->model->get_where("tb_person",["is_verifikasi"=>"0","is_delete"=>"0","id_person"=>dec_uri($id)])) {
        $this->template->set_title("Relawan Terdaftar");
        $data['row'] = $row;
        $this->template->view("content/relawan_menunggu_verifikasi/detail",$data);
      }
    }
  }


  function verifikasi($id="")
  {
    if ($id!="") {
        if ($this->input->is_ajax_request()) {
          $json = array('success'=>false, 'alert'=>array());
          // $this->form_validation->set_rules("no_id","*&nbsp;","trim|xss_clean|htmlspecialchars|required|callback__cek_no_id");
          $this->form_validation->set_rules("no_sk","*&nbsp;","trim|xss_clean|htmlspecialchars|required|callback__cek_sk");
          $this->form_validation->set_rules("status_jabatan","*&nbsp;","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("wilayah_keanggotaan","*&nbsp;","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("password","*&nbsp;","trim|xss_clean|htmlspecialchars|required|callback__cek_password",[
            "required" => "*&nbsp; Silahkan masukkan password untuk mengetahui bahwa anda benar pemilik akun ini"
          ]);
          $this->form_validation->set_error_delimiters('<span class="error mt-1 text-danger" style="font-size:11px">','</span>');

          if ($this->form_validation->run()) {
              $data = array(
                            // 'kd_person' => $this->input->post("no_id",true),
                            'no_sk' => $this->input->post("no_sk",true),
                            'id_jabatan' => $this->input->post("status_jabatan",true),
                            'wilayah_keanggotaan' => $this->input->post("wilayah_keanggotaan",true),
                            'is_verifikasi' => "1"
                            );

              $this->model->get_update("tb_person",$data,["id_person"=>dec_uri($id)]);

              $ket_logs = array_merge(["id_person"=>dec_uri($id)],$data);
              logs("relawan_terdaftar","verifikasi",json_encode($ket_logs));

              $json['alert'] = "Relawan Berhasil di verifikasi";
              $json['success'] =  true;
          }else {
            foreach ($_POST as $key => $value)
              {
                $json['alert'][$key] = form_error($key);
              }
          }

          echo json_encode($json);
        }
    }
  }

    function _cek_no_id($str)
    {
      $where =  array("kd_person"=>$str,"is_delete"=>"0","is_verifikasi"=>"1");
          if ($this->db->get_where("tb_person",$where)->row()) {
            $this->form_validation->set_message('_cek_no_id', '*&nbsp;sudah ada');
            return false;
          } else {
            return true;
          }
    }

    function _cek_sk($str)
    {
      $where =  array("no_sk"=>$str,"is_delete"=>"0","is_verifikasi"=>"1");
          if ($this->db->get_where("tb_person",$where)->row()) {
            $this->form_validation->set_message('_cek_sk', '*&nbsp;sudah ada');
            return false;
          } else {
            return true;
          }
    }

    function delete($id)
    {
      if ($this->input->is_ajax_request()) {
        $json = array('alert_header'=>array(), 'alert'=>array());
        if ($this->model->get_update("tb_person",["modified" => date('Y-m-d H:i:s'), "is_delete" => "1"],["id_person" => dec_uri($id)])) {
            //logs Activity
            logs("relawan_terdaftar","delete",json_encode(["id_person" => dec_uri($id)]));

            $json['alert_header'] = "success";
            $json['alert']        = "delete successfully";
        }else {
            $json['alert_header'] = "error";
            $json['alert']        = "delete unsuccessful";
        }


        echo json_encode($json);
      }
    }


    function export()
    {
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('My Notes Code')
                    ->setLastModifiedBy('My Notes Code')
                    ->setTitle("Menunggu verifikasi")
                    ->setSubject("Menunggu verifikasi")
                    ->setDescription("Menunggu verifikasi")
                    ->setKeywords("Menunggu verifikasi");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
         'font' => array('bold' => true), // Set font nya jadi bold
         'alignment' => array(
           'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
           'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
         ),
         'borders' => array(
           'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
           'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
           'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
           'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
         )
        );
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
         'alignment' => array(
           'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
         ),
         'borders' => array(
           'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
           'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
           'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
           'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
         )
        );
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "LAPORAN RELAWAN MENUNGGU VERIFIKASI"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('A1:K1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
        $excel->setActiveSheetIndex(0)->setCellValue('A2', "Tanggal Export ".date('d-m-Y H:i'));
        $excel->getActiveSheet()->mergeCells('A2:K2');
        $excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1


        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A4', "NO");
        $excel->setActiveSheetIndex(0)->setCellValue('B4', "No.SK");
        $excel->setActiveSheetIndex(0)->setCellValue('C4', "NIK");
        $excel->setActiveSheetIndex(0)->setCellValue('D4', "NAMA");
        $excel->setActiveSheetIndex(0)->setCellValue('E4', "EMAIL");
        $excel->setActiveSheetIndex(0)->setCellValue('F4', "TELEPON");
        $excel->setActiveSheetIndex(0)->setCellValue('G4', "TEMPAT,TGL LAHIR");
        $excel->setActiveSheetIndex(0)->setCellValue('H4', "JENIS KELAMIN");
        $excel->setActiveSheetIndex(0)->setCellValue('I4', "ALAMAT");
        $excel->setActiveSheetIndex(0)->setCellValue('J4', "PROVINSI");
        $excel->setActiveSheetIndex(0)->setCellValue('K4', "KABUPATEN/KOTA");
        $excel->setActiveSheetIndex(0)->setCellValue('L4', "KECAMATAN");
        $excel->setActiveSheetIndex(0)->setCellValue('M4', "KELURAHAN/DESA");
        $excel->setActiveSheetIndex(0)->setCellValue('N4', "STRUKTUR PENGURUS");
        $excel->setActiveSheetIndex(0)->setCellValue('O4', "JABATAN");
        $excel->setActiveSheetIndex(0)->setCellValue('P4', "WILAYAH KEANGGOTAAN");

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P4')->applyFromArray($style_col);



        $qry = $this->model->export();
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
           $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4
           foreach($qry->result() as $data){ // Lakukan looping pada variabel siswa
             $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
             $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, "-");
             $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nik);
             $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nama);
             $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->email);
             $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->telepon);
             $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->tempat_lahir.",".date('d-m-Y',strtotime($data->tanggal_lahir)));
             $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->jenis_kelamin);
             $excel->setActiveSheetIndex(0)->setCellValue('i'.$numrow, $data->alamat);
             $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, tampilkan_wilayah("wil_provinsi",["id"=>$data->id_provinsi]));
             $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, tampilkan_wilayah("wil_kabupaten",["id"=>$data->id_kabupaten]));
             $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, tampilkan_wilayah("wil_kecamatan",["id"=>$data->id_kecamatan]));
             $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, tampilkan_wilayah("wil_kelurahan",["id"=>$data->id_kelurahan]));
             $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, "-");
             $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, "-");
             $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, "-");



             $no++; // Tambah 1 setiap kali looping
             $numrow++; // Tambah 1 setiap kali looping
           }



          // Set width kolom
          $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
          $excel->getActiveSheet()->getColumnDimension('B')->setWidth(30); // Set width kolom B
          $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
          $excel->getActiveSheet()->getColumnDimension('D')->setWidth(30); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom E
          $excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('J')->setWidth(25); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('K')->setWidth(25); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('L')->setWidth(25); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('M')->setWidth(25); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('N')->setWidth(40); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('O')->setWidth(25); // Set width kolom D
          $excel->getActiveSheet()->getColumnDimension('P')->setWidth(25); // Set width kolom D



          // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
          $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
          // Set orientasi kertas jadi LANDSCAPE
          $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
          // Set judul file excel nya
          $filename = 'Menunggu verifikasi-'.date("d-m-Y H:i:s");
          $excel->getActiveSheet(0)->setTitle("Menunggu verifikasi");
          $excel->setActiveSheetIndex(0);
          // Proses file excel\
          header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
          header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"'); // Set nama file excel nya
          header('Cache-Control: max-age=0');
          $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
          $write->save('php://output');

    }


}
