<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintenance extends CI_Controller
{
    public function user_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('maintenance/maintenance_link');
            $this->load->view('maintenance/maintenance_user');
        }
    }

    public function waterhole_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('maintenance/maintenance_link');
            $this->load->view('maintenance/maintenance_waterhole');
        }
    }

    public function hydrogeological_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('maintenance/maintenance_link');
            $this->load->view('maintenance/maintenance_hydrogeological');
        }
    }

    public function telemetry_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('maintenance/maintenance_link');
            $this->load->view('maintenance/maintenance_telemetry');
        }
    }

    public function water_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('maintenance/maintenance_link');
            $this->load->view('maintenance/maintenance_water');
        }
    }

    public function zone_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('maintenance/maintenance_link');
            $this->load->view('maintenance/maintenance_zone');
        }
    }

    public function address_func()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('maintenance/maintenance_link');
            $this->load->view('maintenance/maintenance_address');
        }
    }

}

