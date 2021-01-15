<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assign extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('link');
            $this->load->view('assign_view');
        }
    }

    
}
