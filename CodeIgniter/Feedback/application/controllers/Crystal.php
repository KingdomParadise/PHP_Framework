<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crystal extends CI_Controller
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
        $section_count = count($this->db->get_where('tb_fields', array('f_form_id' => 1, 'f_field_type' => 0, 'f_del_flag' => 0))->result_array());
        for ($i = 1; $i < $section_count + 1; $i++) {
            $fields[$i - 1] = $this->db->get_where('tb_fields', array('f_form_id' => 1, 'f_section_id' => $i, 'f_del_flag' => 0))->result_array();
        }
        $input_fields = $this->db->get_where('tb_fields', array('f_form_id' => 1, 'f_field_type' => 1, 'f_del_flag' => 0))->result_array();
        $text_fields = $this->db->get_where('tb_fields', array('f_form_id' => 1, 'f_field_type' => 3, 'f_del_flag' => 0))->result_array();
        $data['fields'] = $fields;
        $data['input_fields'] = $input_fields;
        $data['text_fields'] = $text_fields;
        $data['section_count'] = $section_count;
        $this->load->view('home', $data);
    }

    public function get_feedback()
    {
        $req = $_POST;
        $date = date('y.m.d h:i:s');
        foreach ($req as $key => $value) {
            $get_field = $this->db->get_where('tb_fields', array('f_id' => $key))->row_array();
            if ($get_field['f_field_type'] == 2) {
                $input_data = array(
                    'f_form_id' => $get_field['f_form_id'],
                    'f_field_id' => $key,
                    'f_combo_val' => $req[$key],
                    'f_text_val' => '',
                    'f_create_date' => $date,
                    'f_del_flag' => 0
                );
                $this->db->insert('tb_feedbacks', $input_data);
            } else {
                $input_data = array(
                    'f_form_id' => $get_field['f_form_id'],
                    'f_field_id' => $key,
                    'f_combo_val' => '',
                    'f_text_val' => $req[$key],
                    'f_create_date' => $date,
                    'f_del_flag' => 0
                );
                $this->db->insert('tb_feedbacks', $input_data);
            }
        }
        redirect("http://local.feedback.com:8080/home");
    }
}
