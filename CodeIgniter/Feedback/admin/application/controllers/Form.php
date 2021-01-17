<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.feedback.com:8080/admin");
        } else {
            $forms = $this->db->get_where('tb_forms', array('f_del_flag' => 0))->result_array();
            $data['forms'] = $forms;
            $this->load->view('form', $data);
        }
    }

    public function log_out()
    {
        $this->session->sess_destory();
    }

    public function add_form()
    {
        $req = $_POST;
        $date = date('ymdhis');
        $req['file_name'] =$date.'.png';
        if ($req['form_name'] =='') {
            echo "Please input form name";
        } elseif ($req['welcome_text'] == '') {
            echo "Please input form welcome text";
        } else {
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
            $result = $this->db->insert('tb_forms', $input_data);
            
            if ($result) {
                $config['upload_path'] = 'D:\Git\PHP_Framework\CodeIgniter\Feedback\admin\assets\upload';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;
                $config['file_name'] = $req['file_name'];


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

    public function active_func()
    {
        $form_name = $_POST['formid'];
        $form = $this->db->get_where('tb_forms', array('f_name' => $form_name))->row_array();
        if ($form['f_state'] == 1) {
            $this->db->where('f_name', $form_name)->update('tb_forms', array('f_state'=>0));
            $resp['state'] = 'success';
            $resp['message'] = 'The form is deactivated';
        } elseif ($form['f_state'] == 0) {
            $this->db->where('f_name', $form_name)->update('tb_forms', array('f_state' => 1));
            $resp['state'] = 'success';
            $resp['message'] = 'The form is activated';
        } else {
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
        } elseif ($form['f_ishome'] == 0) {
            $this->db->where('f_name', $form_name)->update('tb_forms', array('f_ishome' => 1));
            $resp['state'] = 'success';
            $resp['message'] = 'The form is home now!';
        } else {
            $resp['state'] = 'fail';
            $resp['message'] = 'Database Error!';
        }
        echo json_encode($resp);
    }

    public function delete_func()
    {
        $form_name = $_POST['formid'];
        $this->db->where('f_name', $form_name)->update('tb_forms', array('f_del_flag'=>1));
        $resp['state'] = 'success';
        $resp['message'] = 'The form is deleted';
        echo json_encode($resp);
    }

    public function edit_form()
    {
        $req = $_POST;
        $date = date('ymdhis');
        $req['file_name'] = $date . '.png';
        if ($req['edit_form_name'] == '') {
            echo "Please input form name";
        } elseif ($req['edit_welcome_text'] == '') {
            echo "Please input form welcome text";
        } else {
            $update_data = array(
                'f_name' => $req['edit_form_name'],
                'f_slug' => strtolower($req['edit_form_name']),
                'f_welcome' => $req['edit_welcome_text'],
                'f_logo' => $req['file_name']
            );
            $result = $this->db->where('f_name', $req['current_name'])->update('tb_forms', $update_data);
            if ($result) {
                $config['upload_path'] = 'D:\Git\PHP_Framework\CodeIgniter\Feedback\admin\assets\upload';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;
                $config['file_name'] = $req['file_name'];


                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('edit_logo')) {
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

    public function edit_field()
    {
        $form_name = $_GET['dist'];
        $form = $this->db->get_where('tb_forms', array('f_name' => $form_name, 'f_del_flag'=>0))->row_array();
        $form_id = $form['f_id'];
        $fields = $this->db->get_where('tb_fields', array('f_form_id' => $form_id, 'f_del_flag'=>0))->result_array();
        $data['fields'] = $fields;
        $data['form_name'] = $form_name;
        $this->load->view('field', $data);
    }

    public function edit_field_func()
    {
        $req = $_POST;
        if($req['field_type'] == 0){
            $update_data = array(
                'f_field_type' => $req['field_type'],
                'f_section_content' => $req['field_name']
            );
            $resp = $this->db->where('f_form_id',$req['form_id'])->where('f_id', $req['field_id'])->update('tb_fields',$update_data);
            if($resp){
                $res['state'] = 'success';
                $res['message'] = 'Field updated success!';
            }
            else {
                $res['state'] = 'fail';
                $res['message'] = 'Database Error!';
            }
        }
        else{
            $update_data = array(
                'f_field_type' => $req['field_type'],
                'f_label'=> $req['field_name']
            );
            $resp = $this->db->where('f_form_id', $req['form_id'])->where('f_id', $req['field_id'])->update('tb_fields', $update_data);
            if ($resp) {
                $res['state'] = 'success';
                $res['message'] = 'Field updated success!';
            } else {
                $res['state'] = 'fail';
                $res['message'] = 'Database Error!';
            }
        }
        echo json_encode($res);
        
    }

    public function delete_field_func() {
        $resp = $this->db->where('f_id', $_POST['field_id'])->update('tb_fields', array('f_del_flag'=>1));
        if($resp){
            $res['state']='success';
            $res['message'] ='Field delete success!';
        }
        else {
            $res['state'] = 'fail';
            $res['message'] = 'Database error!';
        }
        echo json_encode($res);
    }

    public function add_field(){
        $req = $_POST;
        $fields_count = count($this->db->get_where('tb_fields', array('f_form_id'=>$req['form_id']))->result_array());
        $form = $this->db->get_where('tb_forms', array('f_id' => $req['form_id'], 'f_del_flag' => 0))->row_array();
        $form_name = $form['f_name'];
        $section_count = count($this->db->get_where('tb_fields', array('f_field_type'=>0, 'f_del_flag'=>0))->result_array());
        $date = date('y-m-d h:i:s');
        if($req['add_field_type'] == 0) {
            $insert_data = array(
                'f_form_id' => $req['form_id'],
                'f_field_type' => $req['add_field_type'],
                'f_no' => $fields_count + 1,
                'f_section_content' => $req['add_field_name'],
                'f_del_flag'=> 0,
                'f_create_date'=> $date,
                'f_section_id' =>$section_count+1
            );
            $resp = $this->db->insert('tb_fields', $insert_data);
            $url = "http://local.feedback.com:8080/admin/form/edit_field?dist=".$form_name;
            redirect($url);
        }
        else if($req['add_field_type'] == 2){
            $insert_data = array(
                'f_form_id' => $req['form_id'],
                'f_field_type' => $req['add_field_type'],
                'f_no' => $fields_count + 1,
                'f_label' => $req['add_field_name'],
                'f_del_flag' => 0,
                'f_create_date' => $date,
                'f_section_id' => $section_count
            );
            $resp = $this->db->insert('tb_fields', $insert_data);
            $url = "http://local.feedback.com:8080/admin/form/edit_field?dist=" . $form_name;
            redirect($url);
        }
        else {
            $insert_data = array(
                'f_form_id' => $req['form_id'],
                'f_field_type' => $req['add_field_type'],
                'f_no' => $fields_count + 1,
                'f_label' => $req['add_field_name'],
                'f_del_flag' => 0,
                'f_create_date' =>$date
            );
            $resp = $this->db->insert('tb_fields', $insert_data);
            $url = "http://local.feedback.com:8080/admin/form/edit_field?dist=" . $form_name;
            redirect($url);
        }
    }

    public function show_feedback(){
        $form_name = $_GET['dist'];
        $form_id = $this->db->get_where('tb_forms',array('f_name'=>$form_name))->row_array()['f_id'];
        $feedbacks = $this->db->get_where('tb_feedbacks', array('f_form_id'=>$form_id, 'f_del_flag'=>0))->result_array();
        $cnt_good = count($this->db->get_where('tb_feedbacks', array('f_form_id'=>$form_id, 'f_combo_val'=>'good', 'f_del_flag'=>0))->result_array());
        $cnt_aver = count($this->db->get_where('tb_feedbacks', array('f_form_id' => $form_id, 'f_combo_val' => 'average', 'f_del_flag' => 0))->result_array());
        $cnt_bad = count($this->db->get_where('tb_feedbacks', array('f_form_id' => $form_id, 'f_combo_val' => 'bad', 'f_del_flag' => 0))->result_array());
        $data['feedbacks'] = $feedbacks;
        $data['cnt_good'] = $cnt_good;
        $data['cnt_aver'] = $cnt_aver;
        $data['cnt_bad'] = $cnt_bad;
        $data['form_name'] = $form_name;
        var_dump($data);exit;
        $this->load->view('feedbacks',$data);
    }
}