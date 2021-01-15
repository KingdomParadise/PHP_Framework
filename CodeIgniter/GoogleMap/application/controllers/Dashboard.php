<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->load->view('link');
            $this->load->view('dashboard_view');
        }
    }

    public function login_func()
    {
        $req = $_POST;
        if ($req['admin_email'] == '') {
            $this->session->set_flashdata('message', array('error', 'Access Error', 'Please input admin email!'));
            redirect("http://local.googlemap.com:8080");
        } else if ($req['admin_pwd'] == '') {
            $this->session->set_flashdata('message', array('error', 'Access Error', 'Please input admin password!'));
            redirect("http://local.googlemap.com:8080");
        } else if ($req['admin_email'] != 'admin@admin.com') {
            $this->session->set_flashdata('message', array('error', 'Access Error', 'Please input admin email correctly!'));
            redirect("http://local.googlemap.com:8080");
        } else if ($req['admin_pwd'] != 'adminpwd') {
            $this->session->set_flashdata('message', array('error', 'Access Error', 'Please input admin password correctly!'));
            redirect("http://local.googlemap.com:8080");
        } else {
            $this->session->set_flashdata('message', array('success', 'Congratulations!', 'Thanks, Login Success!'));
        }
        redirect("http://local.googlemap.com:8080/dashboard");
    }
}
