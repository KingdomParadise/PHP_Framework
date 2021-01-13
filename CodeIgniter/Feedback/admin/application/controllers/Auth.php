<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function admin_login(){
		$req = $_POST;
		if($req['name'] == ''){
			$resp['state'] = 'fail';
			$resp['message'] = 'Please insert Admin ID!';
		}
		else if($req['pwd'] == "") {
			$resp['state'] = 'fail';
			$resp['message'] = 'Please insert Admin password';
		}
		else if($req['name'] != 'admin@admin.com') {
			$resp['state'] = 'fail';
			$resp['message'] = 'Please insert correct Admin ID';
		}
		else if($req['pwd'] != '12345678'){
			$resp['state'] = 'fail';
			$resp['message'] = 'Please insert correct Admin Password';
		}
		else {
			$resp['state'] = 'success';
			$resp['message'] = 'Welcome!';
			$this->session->set_userdata('userlogin','success');
		}
		echo json_encode($resp);
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		redirect("http://local.feedback.com:8080/admin");
	}
}
