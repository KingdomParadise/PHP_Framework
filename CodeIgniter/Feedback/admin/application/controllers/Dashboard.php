<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {   
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.feedback.com:8080/admin");
        } else {
            $this->load->view('dashboard');
        }
    }
}
