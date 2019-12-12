<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class System_setting extends MY_Controller{

function index(){
  $this->template->set_title("System Setting");
  $this->template->view("content/system/index");
}

}
