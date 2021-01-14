<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
    {   
        $section_count = count($this->db->get_where('tb_fields',array('f_form_id'=>1, 'f_field_type'=>0, 'f_del_flag'=>0))->result_array());
        for ($i = 1; $i < $section_count+1; $i++){
            $fields[$i-1] = $this->db->get_where('tb_fields', array('f_form_id'=>1, 'f_section_id'=> $i, 'f_del_flag'=>0))->result_array();
        }
        $input_fields = $this->db->get_where('tb_fields', array('f_form_id'=>1, 'f_field_type'=>1,'f_del_flag'=>0))->result_array();
        $text_fields = $this->db->get_where('tb_fields', array('f_form_id'=>1, 'f_field_type'=>3, 'f_del_flag'=>0))->result_array();
        $data['fields'] = $fields;
        $data['input_fields'] = $input_fields;
        $data['text_fields'] = $text_fields;
        $data['section_count'] = $section_count;
        $this->load->view('home', $data);
    }

    public function get_feedback(){
        $req = $_POST;
        $date = date('y.m.d h:i:s');
        $cur_feedback = count($this->db->get_where('tb_feedbacks', array('f_field_id'=>2,'f_del_flag'=>0))->result_array());
        foreach ($req as $key => $value) {
            $get_field = $this->db->get_where('tb_fields', array('f_id'=>$key))->row_array();
            if($get_field['f_field_type'] == 2){
               $input_data = array(
                    'f_form_id' => $get_field['f_form_id'],
                    'f_field_id' => $key,
                    'f_combo_val' => $req[$key],
                    'f_text_val' => '',
                    'f_create_date' => $date,
                    'f_del_flag' => 0,
                    'f_cur_feednum' => $cur_feedback+1
               );
               $this->db->insert('tb_feedbacks', $input_data);
            }
            else {
                $input_data = array(
                    'f_form_id' => $get_field['f_form_id'],
                    'f_field_id' => $key,
                    'f_combo_val' => '',
                    'f_text_val' => $req[$key],
                    'f_create_date' => $date,
                    'f_del_flag' => 0,
                    'f_cur_feednum' => $cur_feedback + 1
                );
                $this->db->insert('tb_feedbacks', $input_data);
            }
        }
        redirect("http://local.feedback.com:8080/home");
    }

    /* public function sendMail()
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'robertfree302@gmail.com', // change it to yours
            'smtp_pass' => 'hecbrghj24', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $message = 'TEST';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('rapsterito@gmail.com');
        $this->email->to('robertfree302@gmail.com');
        $this->email->subject('Resume from JobsBuddy for your Job posting');
        $this->email->message($message);
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    } */

    /* public function get_feedback()
    {
        $req = $_POST;
        $date = date('y.m.d h:i:s');
        $cur_feedback = count($this->db->get_where('tb_feedbacks', array('f_field_id' => 2, 'f_del_flag' => 0))->result_array());
        foreach ($req as $key => $value) {
            $get_field = $this->db->get_where('tb_fields', array('f_id' => $key))->row_array();
            if ($get_field['f_field_type'] == 2) {
                $input_data = array(
                    'f_form_id' => $get_field['f_form_id'],
                    'f_field_id' => $key,
                    'f_combo_val' => $req[$key],
                    'f_text_val' => '',
                    'f_create_date' => $date,
                    'f_del_flag' => 0,
                    'f_cur_feednum' => $cur_feedback + 1
                );
                $this->db->insert('tb_feedbacks', $input_data);
            } else {
                $input_data = array(
                    'f_form_id' => $get_field['f_form_id'],
                    'f_field_id' => $key,
                    'f_combo_val' => '',
                    'f_text_val' => $req[$key],
                    'f_create_date' => $date,
                    'f_del_flag' => 0,
                    'f_cur_feednum' => $cur_feedback + 1
                );
                $this->db->insert('tb_feedbacks', $input_data);
            }
        }

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'robertfree302@gmail.com', // change it to yours
            'smtp_pass' => 'hecbrghj24', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $message = "The client submit his/her feedback for Form(Wave). Please check admin panel.";
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('client@feedback.com');
        $this->email->to('robertfree302@gmail.com');
        $this->email->subject('Client Feedback');
        $this->email->message($message);
        if ($this->email->send()) {
            redirect("https://realdevelops.com/home");
        } else {
            show_error($this->email->print_debugger());
        }
    } */
}


