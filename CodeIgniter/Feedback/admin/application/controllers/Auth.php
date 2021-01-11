<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
