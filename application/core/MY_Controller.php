<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{


  public function __construct()
    {
      parent::__construct();
      $this->load->helper(array("enc_gue"));
      $this->load->library(array("template","form_validation"));
    }

}
