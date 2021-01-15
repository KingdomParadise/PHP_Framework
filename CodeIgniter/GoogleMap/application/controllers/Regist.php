<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regist extends CI_Controller
{

    public function user_reg_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('link');
            $this->load->view('user_regist_view');
        }
    }

    public function pos_reg_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('link');
            $this->load->view('pos_regist_view');
        }
    }
}
