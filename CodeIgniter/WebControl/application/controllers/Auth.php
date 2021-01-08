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

	public function show_user_manage(){
		if(!$this->session->userdata('login_session')){
			redirect('http://local.webcontrol.com:8080/auth');
		}
		else{
			$this->load->view('user_manage');
		}
	}

	public function delete_user(){
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('delete_user_view');
		}
	}

	public function del_user_func(){

		$resp['state'] = 'fail';
		$resp['message'] = 'Username is incorrect!';
		if($_POST['username'] == ""){
			$resp['state'] = 'fail';
			$resp['message'] = 'Please input username!';
		}
		else {
			$users = $this->db->get_where('tb_user', array('f_del_flag' => 0))->result_array();
			foreach ($users as $key => $value) {
				if($value['f_name'] == $_POST['username']){
					$response = $this->db->set('f_del_flag', 1)->where('f_id', intval($value['f_id']))->update('tb_user');
					$resp['state'] = 'success';
					$resp['message'] = 'Delete user correctly!';
				}
			}
		}
		echo json_encode($resp);
	}

	public function add_user()
	{
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('add_user_view');
		}
	}

	public function auth_add_user(){
		$request = $_POST;
		$date = date('Y.m.d h:i:s');
		$state = true;
		$users = $this->db->get_where('tb_user', array('f_del_flag' => 0))->result_array();

		foreach ($users as $key => $value) {
			if($value['f_name'] == $request['username']){
				$state = false;
			}
		}

		if($state){
			if ($request['username'] == "") {
				$resp['state'] = 'fail';
				$resp['message'] = 'Please input username!';
			} else if ($request['userpwd'] == "") {
				$resp['state'] = 'fail';
				$resp['message'] = 'Please input password!';
			} else if ($request['confirm'] == "") {
				$resp['state'] = 'fail';
				$resp['message'] = 'Please confirm your password!';
			} else if ($request['userpwd'] != $request['confirm']) {
				$resp['state'] = 'fail';
				$resp['message'] = 'Please confirm your password correctly!';
			} else {
				$input_data = array(
					'f_name' => $request['username'],
					'f_pwd' => md5($request['userpwd']),
					'f_create_time' => $date,
					'f_del_flag' => 0
				);
				$response = $this->db->insert('tb_user', $input_data);
				$resp['state'] = 'success';
				$resp['message'] = 'Add user correctly!';
			}
		}
		else {
			$resp['state'] = 'fail';
			$resp['message'] = 'Username already exist!';
		}
		echo json_encode($resp);
	}

	public function view_equipment()
	{
		$equipments = $this->db->get_where('tb_equipment', array('f_del_flag'=>0))->result_array();
		$data['equipments'] = $equipments;
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('view_equipment', $data);
		}
	}
	
	public function equipment_manage()
	{
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('equipment_manage');
		}
	}

	public function add_equipment(){
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('add_equipment');
		}
	}

	public function add_dev_func(){
		$req = $_POST;
		$date = date('Y.m.d h:i:s');
		$equipments = $this->db->get_where('tb_equipment', array('f_del_flag' => 0, 'f_name' => $req['name']))->result_array();
		if($equipments == null){
			if($req['name'] == ''){
				$resp['state'] = 'fail';
				$resp['message'] = 'Please input device name!';
			}
			else if($req['location'] == ''){
				$resp['state'] = 'fail';
				$resp['message'] = 'Please input device location!';
			}
			else if($req['ip_addr'] == ''){
				$resp['state'] = 'fail';
				$resp['message'] = 'Please input IP address!';
			}
			else {
				$input_data = array(
					'f_type' => $req['type'],
					'f_name' => $req['name'],
					'f_location' => $req['location'],
					'f_ip_address' => $req['ip_addr'],
					'f_create_time' => $date,
					'f_del_flag' => 0
				);
				$response = $this->db->insert('tb_equipment',$input_data);
				$resp['state'] = 'success';
				$resp['message'] = 'Device is added correctly!';
			}
		}
		else {
			$resp['state'] = 'fail';
			$resp['message'] = 'Device name is already exist!';
		}
		echo json_encode($resp);
	}

	public function delete_equipment(){
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('delete_equipment');
		}
	}

	public function del_dev_func(){
		$req = $_POST;
		if($req['dev_ip'] == ''){
			$resp['state'] = 'fail';
			$resp['message'] = 'Please input Equipment IP address!';
		}
		else{
			$equipments = $this->db->get_where('tb_equipment', array('f_ip_address' => $req['dev_ip'], 'f_del_flag' => 0))->result_array();
			if ($equipments == null) {
				$resp['state'] = 'fail';
				$resp['message'] = 'Please input IP Address Correctly!';
			}
			else {
				$response = $this->db->set('f_del_flag', 1)->where('f_ip_address', $req['dev_ip'])->update('tb_equipment');
				$resp['state'] = 'success';
				$resp['message'] = 'Device IP Address is deleted correctly!';
			}
		}
		echo json_encode($resp);
	}

	public function search_equipment()
	{
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('search_equipment');
		}
	}

	public function search_dev_func(){
		$req = $_POST;
		if($req['dev_ip'] == ''){
			$resp['state'] = 'fail';
			$resp['message'] = 'Please input device IP address!';
		} 
		else {
			$equipments = $this->db->get_where('tb_equipment', array('f_ip_address' => $req['dev_ip'], 'f_del_flag' => 0))->result_array();
			if ($equipments == null) {
				$resp['state'] = 'fail';
				$resp['message'] = 'Please input IP Address Correctly!';
			} else {
				$resp['state'] = 'success';
				$resp['message'] = 'Device IP Address is deleted correctly!';
				$resp['type'] = $equipments[0]['f_type'];
				$resp['name'] = $equipments[0]['f_name'];
				$resp['location'] = $equipments[0]['f_location'];
				if($equipments[0]['f_state'] == 0) {
					$resp['status'] = 'FAIL';
				}
				else {
					$resp['status'] = 'OK';
				}
			}
		}
		echo json_encode($resp);
	}

	public function add_vlan_ports() {

		$ip_addrs = $this->db->get_where('tb_equipment', array('f_del_flag' => 0))->result_array();
		$data['ip_addrs'] = $ip_addrs;
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('add_vlan_ports', $data);
		}
	}

	public function add_port_func(){
		$req = $_POST;
		$date = date('Y.m.d h:i:s');
		$port = $this->db->get_where('tb_ip_port', array('f_ip'=>$req['ip_addr'],'f_del_flag'=>0, 'f_port'=>$req['port']))->result_array();
		if($port != null) {
			$resp['state'] = 'fail';
			$resp['message'] = 'The port or VLAN is already registerd!';
		} else {
			$input_data = array(
				'f_ip' => $req['ip_addr'],
				'f_port' => $req['port'],
				'f_vlan' => $req['vlan'],
				'f_create_time' => $date,
				'f_del_flag' => 0
			);
			$response = $this->db->insert('tb_ip_port', $input_data);
			$resp['state'] = 'success';
			$resp['message'] = 'IP AND PORT is added correctly!';
		}
		echo json_encode($resp);
	}

	public function restart_switch() {
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('restart_switch_view');
		}
	}

	public function date_filter_show() {

		$logs = $this->db->get_where('tb_syslog', array('f_del_flag'=>0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('date_filter_result', $data);
		}
	}

	public function search_date_filter_show(){
		$req = $_POST;
		$logs = $this->db->get_where('tb_syslog', array('f_log_time'=>$req['filter_date'], 'f_del_flag'=>0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('date_filter_result', $data);
		}
	}

	public function team_filter_show()
	{
		$logs = $this->db->get_where('tb_syslog', array('f_del_flag' => 0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('team_filter_result',$data);
		}
	}

	public function team_filter_log_show() {
		$req = $_POST;
		$logs = $this->db->get_where('tb_syslog', array('f_ip' => $req['team_id'], 'f_del_flag' => 0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('http://local.webcontrol.com:8080/auth');
		} else {
			$this->load->view('team_filter_result', $data);
		}
	}

	public function login() {
		$request = $_POST;
		if($request['username'] == ""){
			$resp['state'] = "fail";
			$resp['message'] = "Please input username!";
		}
		else if ($request['userpwd'] == "") {
			$resp['state'] = "fail";
			$resp['message'] = "Please input password!";
		}
		else if ($request['username'] != "admin") {
			$resp['state'] = "fail";
			$resp['message'] = "Please input username correctly!";
		}
		else if ($request['userpwd'] != "1234") {
			$resp['state'] = "fail";
			$resp['message'] = "Please input password correctly!";
		}
		else {
			$this->session->set_userdata('login_session','login_session');
			$resp['state'] = "success";
			$resp['message'] = "Congratulation!";
		}
		echo json_encode($resp);
	}
}
