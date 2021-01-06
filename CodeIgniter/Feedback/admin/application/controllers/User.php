<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $this->load->view('user');
    }

    public function get_forms()
    {
    }
}
