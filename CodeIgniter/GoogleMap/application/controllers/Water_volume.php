<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Water_volume extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('link');
            $this->load->view('water_level_view');
        }
    }
}
