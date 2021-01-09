<!-- 
	This is the function that can control all component and switch.
	On the top of each function, I will explain about that function.
 -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	/* 
		Public function index()
		This function shows the Login Page from start
	*/
	public function index()
	{
		$this->load->view('login');
	}

	/* 
		public function show_user_manage()
		This function shows the UserManagement page
	*/
	public function show_user_manage(){
		if(!$this->session->userdata('login_session')){
			redirect('auth');
		}
		else{
			$this->load->view('link');
			$this->load->view('user_manage');
		}
	}

	/* 
		public function delete_user()
		This function shows Delete User page
	*/
	public function delete_user(){
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('delete_user_view');
		}
	}

	/* 
		public function del_user_func()
		In this function, we can delete user from database if the admin input the username in the Delete User page
		First part of this function is form validation part
	*/
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

	/* 
		public function add_user()
		This function shows Add User page
	*/
	public function add_user()
	{
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('add_user_view');
		}
	}

	/* 
		public function auth_add_user()
		In this function, we can add user in database if the admin input user detail inforamtion in the Add User Page
		The first part of this function is form validation part
	*/
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

	/* 
		public function view_equipment()
		This function shows Equipment List page
		The first part of this function is getting equipments list from database
	*/
	public function view_equipment()
	{
		$equipments = $this->db->get_where('tb_equipment', array('f_del_flag'=>0))->result_array();
		$data['equipments'] = $equipments;
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('view_equipment', $data);
		}
	}
	
	/* 
		public function equipment_manage()
		This functions shows the Equipment Management page
	*/
	public function equipment_manage()
	{
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('equipment_manage');
		}
	}

	/* 
		public function add_equipment()
		This function shows Add Equipment page
	*/
	public function add_equipment(){
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('add_equipment');
		}
	}

	/* 
		public function add_dev_func()
		In this function admin can add device to the database if the admin input detail information of device in the Add Equipment page
		The first part of this function is form validation part
	*/
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

	/* 
		public function delete_equipment()
		This function shows the Delete Equipment page
	*/
	public function delete_equipment(){
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('delete_equipment');
		}
	}

	/* 
		public_function del_dev_func()
		In this function, admin can delete device from database if he input correct information of device in Delete equipment page
	*/
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

	/* 
		public function search_equipment()
		This function shows Search Equipment page
	*/
	public function search_equipment()
	{
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('search_equipment');
		}
	}

	/* 
		public function search_dev_func()
		In this function, the admin can search the device detail information from database if he input correct information of device on th Search Equipment Page
	*/
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

	/* 
		public function add_vlan_ports()
		This function shows the ADD VLAN PORTS PAGE
	*/
	public function add_vlan_ports() {

		$ip_addrs = $this->db->get_where('tb_equipment', array('f_del_flag' => 0))->result_array();
		$data['ip_addrs'] = $ip_addrs;
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('add_vlan_ports', $data);
		}
	}

	/* 
		public function add_port_func()
		In this function, admin can add port of device to database if he inputs correct info of device and port
	*/

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

	/* 
		public function restart_switch()
		This function shows Restart Switch page
	*/
	public function restart_switch() {
		$equipments = $this->db->get_where('tb_equipment', array('f_del_flag'=>0))->result_array();
		$data['equipments'] = $equipments;
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('restart_switch_view', $data);
		}
	}

	/* 
		public function date_filter_show()
		This function shows the syslog from database
	*/
	public function date_filter_show() {

		$logs = $this->db->get_where('tb_syslog', array('f_del_flag'=>0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('date_filter_result', $data);
		}
	}

	/* 
		public function search_date_filter_show()
		This function shows the results of syslog from database with data that admin inputed date
	*/
	public function search_date_filter_show(){
		$req = $_POST;
		$logs = $this->db->get_where('tb_syslog', array('f_log_time'=>$req['filter_date'], 'f_del_flag'=>0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('link');
			$this->load->view('date_filter_result', $data);
		}
	}

	/* 
		public function team_filter_show()
		This function shows the syslog from database
		This function equal date_filter_show() but for expanding function I have made
	*/
	public function team_filter_show()
	{
		$logs = $this->db->get_where('tb_syslog', array('f_del_flag' => 0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('team_filter_result',$data);
		}
	}

	/* 
		public function team_filter_log_show()
		This function shows the filtered results of syslog from database with IP address 
	*/
	public function team_filter_log_show() {
		$req = $_POST;
		$logs = $this->db->get_where('tb_syslog', array('f_ip' => $req['team_id'], 'f_del_flag' => 0))->result_array();
		$data['logs'] = $logs;
		if (!$this->session->userdata('login_session')) {
			redirect('auth');
		} else {
			$this->load->view('team_filter_result', $data);
		}
	}

	/* 
		public function login()
		In this function the system check the person is admin or not
	*/
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
