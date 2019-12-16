<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/modules/backend/core/MY_Controller.php";
class Error extends MY_Controller{


  function not_permission()
  {
    $this->template->set_title("Error 403");
    $this->template->view("content/error/not_permission");
  }

}
