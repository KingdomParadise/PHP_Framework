<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

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
    {   if($this->session->userdata['userlogin'] != 'success'){
            redirect("http://local.feedback.com:8080/admin");
        }
        else{
            $forms = $this->db->get_where('tb_forms', array('f_del_flag' => 0))->result_array();
            $data['forms'] = $forms;
            $this->load->view('form',$data);
        }
    }

    public function log_out(){
        $this->session->sess_destory();
    }

    public function add_form() {
        
        $req = $_POST;
        $date = date('y.m.d h:;:s');
        $req['file_name'] =$_FILES['image_file']['name'];
        if($req['form_name'] ==''){
            echo "Please input form name";
        }
        else if ($req['welcome_text'] == ''){
            echo "Please input form welcome text";
        }
        else {
            $input_data = array(
                'f_name' => $req['form_name'],
                'f_slug' => strtolower($req['form_name']),
                'f_welcome' => $req['welcome_text'],
                'f_logo' => $req['file_name'],
                'f_state' => 1,
                'f_ishome' => 0,
                'f_create_date' => $date,
                'f_del_flag' => 0
            );
            $result = $this->db->insert('tb_forms',$input_data);
            
            if($result){
                $config['upload_path'] = 'D:\Git\PHP_Framework\CodeIgniter\Feedback\admin\assets\upload';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image_file')) {
                    $error = array('error' => $this->upload->display_errors());

                    echo json_encode($error);
                } else {
                    $data = array('image_metadata' => $this->upload->data());

                    echo json_encode($data);
                }
            } 
        } 

        redirect("http://local.feedback.com:8080/admin/form");
    }

    public function active_func() {
        $form_name = $_POST['formid'];
        $form = $this->db->get_where('tb_forms', array('f_name' => $form_name))->row_array();
        if($form['f_state'] == 1) {
            $this->db->where('f_name', $form_name)->update('tb_forms', array('f_state'=>0));
            $resp['state'] = 'success';
            $resp['message'] = 'The form is deactivated';
        }
        else if($form['f_state'] == 0){
            $this->db->where('f_name', $form_name)->update('tb_forms', array('f_state' => 1));
            $resp['state'] = 'success';
            $resp['message'] = 'The form is activated';
        }
        else {
            $resp['state'] = 'fail';
            $resp['message'] = 'Database Error!';
        }
        echo json_encode($resp);
    }

    public function home_func()
    {
        $form_name = $_POST['formid'];
        $form = $this->db->get_where('tb_forms', array('f_name' => $form_name))->row_array();
        if ($form['f_ishome'] == 1) {
            $this->db->where('f_name', $form_name)->update('tb_forms', array('f_ishome' => 0));
            $resp['state'] = 'success';
            $resp['message'] = 'The form is not home now!';
        } else if ($form['f_ishome'] == 0) {
            $this->db->where('f_name', $form_name)->update('tb_forms', array('f_ishome' => 1));
            $resp['state'] = 'success';
            $resp['message'] = 'The form is home now!';
        } else {
            $resp['state'] = 'fail';
            $resp['message'] = 'Database Error!';
        }
        echo json_encode($resp);
    }

    public function delete_func() {
        $form_name = $_POST['formid'];
        $this->db->where('f_name',$form_name)->update('tb_forms',array('f_del_flag'=>1));
        $resp['state'] = 'success';
        $resp['message'] = 'The form is deleted';
        echo json_encode($resp);
    }

}
