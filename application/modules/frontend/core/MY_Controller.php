<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{


  public function __construct()
    {
      parent::__construct();
      if ($this->session->userdata("logins_person")!=true) {
          redirect(site_url("frontend/login"),"refresh");
      }
      $this->load->helper(array("frontend","enc_gue","tanggal_indonesia"));
      $this->load->library(array("template"));
    }

}
