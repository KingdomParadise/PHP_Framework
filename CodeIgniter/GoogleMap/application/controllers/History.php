<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function graph_show()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('link');
            $this->load->view('graph_view');
        }
    }

    public function table_show()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
                $this->load->view('table_view');
        }
    }
}
