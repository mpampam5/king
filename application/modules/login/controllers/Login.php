<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }


    function action()
    {
      if ($this->input->is_ajax_request()) {
        // code...


        echo json_encode($json);
      }
    }


}

/* End of file Login.php */
