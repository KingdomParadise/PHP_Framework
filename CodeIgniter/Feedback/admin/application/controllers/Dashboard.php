<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {   
        if ($this->session->userdata['userlogin'] != 'success') {
            redirect("http://local.feedback.com:8080/admin");
        } else {
            $this->load->view('dashboard');
        }
    }

    public function get_data(){
        $total_feedback = $this->db->get_where('tb_feedbacks', array('f_text_val'=>'','f_del_flag'=>'0'))->result_array();
        $good_feedback = count($this->db->get_where('tb_feedbacks',array('f_combo_val'=>'good', 'f_del_flag'=>'0'))->result_array());
        $aver_feedback = count($this->db->get_where('tb_feedbacks', array('f_combo_val' => 'average', 'f_del_flag' => '0'))->result_array());
        $bad_feedback = count($this->db->get_where('tb_feedbacks', array('f_combo_val' => 'bad', 'f_del_flag' => '0'))->result_array());
        $query_date = "SELECT f_create_date FROM tb_feedbacks WHERE 'f_del_flag' = 0 GROUP BY f_create_date";
        $date = $this->db->query($query_date)->result_array();
        foreach ($date as $key => $value) {
            $date_feedback[$key]['good']
            = count($this->db->get_where('tb_feedbacks', array('f_combo_val' => 'good', 'f_create_date'=>$value['f_create_date'], 'f_del_flag' => '0'))->result_array());
            $date_feedback[$key]['aver']
            = count($this->db->get_where('tb_feedbacks', array('f_combo_val' => 'average', 'f_create_date' => $value['f_create_date'], 'f_del_flag' => '0'))->result_array());
            $date_feedback[$key]['bad']
            = count($this->db->get_where('tb_feedbacks', array('f_combo_val' => 'bad', 'f_create_date' => $value['f_create_date'], 'f_del_flag' => '0'))->result_array());
            $date_feedback[$key]['date'] = $value['f_create_date'];
        }
        
        var_dump($date_feedback);exit;
    }
}
