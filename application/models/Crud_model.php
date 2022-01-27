<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Crud_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();
    }


    function get_type_name_by_id($type, $type_id = null, $field = 'name'){
        $this->db->where($type . '_id', $type_id);
        $query = $this->db->get($type);
        $result = $query->result_array();

        foreach ($result as $key => $row)
        return $row [$field];

    }

    function get_image_url ($type = null, $id = null){

        if(file_exists('uploads/' . $type . '_image/' . $id . '.png'))
            $image_url = base_url(). 'uploads/' . $type . '_image/' . $id . '.png';
        else
        $image_url = base_url(). 'uploads/default_image.png';

        return $image_url;
    }


    function get_subject_info($subject_id){

        $query = $this->db->get_where('subject', array('subject_id'=> $subject_id));
        return $query->result_array();

    }


    function get_total_mark($online_exam_id){

        $added_question_info = $this->db->get_where('question_bank', array('online_exam_id' => $online_exam_id))->result_array();
        $total_mark = 0;
        if(sizeof($added_question_info) > 0){
            foreach($added_question_info as $key => $single_question){
                $total_mark = $total_mark + $single_question['mark'];
            }
        }

        return $total_mark;
    }


    function create_online_exam(){
        $data['code']  = substr(md5(uniqid(rand(), true)), 0, 7);
        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date'). " " ."23:59:59";
        $data['title'] = $this->input->post('title');
        $data['program_id'] = $this->input->post('program_id');
        $data['minimum_percentage'] = $this->input->post('minimum_percentage');
        $data['start_date'] = $start;
        $data['end_date'] = $end;
        $data['duration'] = $this->input->post('duration');

        $this->db->insert('online_exam', $data);
    }

    function update_online_exam(){
        $end = $this->input->post('end_date'). " " ."23:59:59";
        $data['title'] = $this->input->post('title');
        $data['program_id'] = $this->input->post('program_id');
        $data['minimum_percentage'] = $this->input->post('minimum_percentage');
        $data['start_date'] = $this->input->post('start_date');
        $data['end_date'] = $end;
        $data['duration'] = $this->input->post('duration');
        
        $this->db->where('online_exam_id', $this->input->post('online_exam_id'));
        $this->db->update('online_exam', $data);
    }

    function delete_online_exam($param2){
        $this->db->where('online_exam_id', $param2);
        $this->db->delete('online_exam');
    }

    // multiple_choice_question crud functions
    function add_multiple_choice_question_to_online_exam($online_exam_id){
        foreach ($this->input->post('options') as $key => $option) {
            if ($option == "") {
                $this->session->set_flashdata('error_message' , get_phrase('no_options_can_be_blank'));
                return;
            }
        }
        if (sizeof($this->input->post('correct_answers')) == 0) {
            $correct_answers = [""];
        }
        else{
            $correct_answers = $this->input->post('correct_answers');
        }
        $data['online_exam_id']     = $online_exam_id;
        $data['no']           = $this->input->post('no');
        $data['question_title']     = $this->input->post('question_title');
        $data['category']           = $this->input->post('category');
        $data['options']            = json_encode($this->input->post('options'));
        $data['correct_answers']    = $correct_answers;
        $data['explanation']           = $this->input->post('explanation');
        $data['reference']           = $this->input->post('reference');
        $data['keywords']           = $this->input->post('keywords');
        $this->db->insert('question_bank', $data);
        $this->session->set_flashdata('flash_message' , get_phrase('question added successfully'));
    }


    function update_multiple_choice_question($question_id){
        foreach ($this->input->post('options') as $key => $option) {
            if ($option == "") {
                $this->session->set_flashdata('error_message' , get_phrase('no_options_can_be_blank'));
                return;
            }
        }
        if (sizeof($this->input->post('correct_answers')) == 0) {
            $correct_answers = [""];
        }
        else{
            $correct_answers = $this->input->post('correct_answers');
        }
        $data['no']           = $this->input->post('no');
        $data['question_title']     = $this->input->post('question_title');
        $data['category']           = $this->input->post('category');
        $data['options']            = json_encode($this->input->post('options'));
        $data['correct_answers']    = $correct_answers;
        $data['explanation']           = $this->input->post('explanation');
        $data['reference']           = $this->input->post('reference');
        $data['keywords']           = $this->input->post('keywords');

        $this->db->where('question_bank_id', $question_id);
        $this->db->update('question_bank', $data);
        $this->session->set_flashdata('flash_message' , get_phrase('question updated successfully'));
    }

    function delete_question_from_online_exam($question_id){
        $this->db->where('question_bank_id', $question_id);
        $this->db->delete('question_bank');
    }

    function manage_online_exam_status($online_exam_id = null, $status = null){

        $checker = array(

            'online_exam_id' => $online_exam_id
        );

        $updater = array(

            'status' => $status
        );

        $this->db->where($checker);
        $this->db->update('online_exam', $updater);
        $this->session->set_flashdata('flash_message' , get_phrase('exam').' '. $status);
    }



    function available_exams($student_id) {
        $exams = $this->db->get('online_exam')->result_array();
        return $exams;
    }

    


    function change_online_exam_status_to_attended_for_student($online_exam_id = "",$question_bank_id = ""){

        $checker = array(
            'online_exam_id' => $online_exam_id,
            'student_id' => $this->session->userdata('login_user_id'),
            'question_bank_id' => $question_bank_id
        );

        if($this->db->get_where('online_exam_result', $checker)->num_rows() == 0){
            $inserted_array = array(
                'status' => 'attended',
                'online_exam_id' => $online_exam_id,
                'student_id' => $this->session->userdata('login_user_id'),
                'exam_started_timestamp' => $timer,
                'question_bank_id' => $question_bank_id
            );
            $this->db->insert('online_exam_result', $inserted_array);
        }
    }

    function run_exam($online_exam_id = "",$question_bank_id = "",$timer = "",$timezone = ""){
        $query = false;
        $checker = array(
            'online_exam_id' => $online_exam_id,
            'student_id' => $this->session->userdata('login_user_id'),
            'question_bank_id' => $question_bank_id
        );

        if($this->db->get_where('online_exam_result', $checker)->num_rows() == 0){
            $inserted_array = array(
                'status' => 'attended',
                'online_exam_id' => $online_exam_id,
                'student_id' => $this->session->userdata('login_user_id'),
                'exam_started_timestamp' => $timer,
                'start_timezone' => $timezone,
                'question_bank_id' => $question_bank_id
            );
            $query = $this->db->insert('online_exam_result', $inserted_array);
        }
        // }else{
        //     $this->db->where($checker);
        //     $this->db->delete('online_exam_result');

        //     $inserted_array = array(
        //         'status' => 'attended',
        //         'online_exam_id' => $online_exam_id,
        //         'student_id' => $this->session->userdata('login_user_id'),
        //         'exam_started_timestamp' => $timer,
        //         'question_bank_id' => $question_bank_id
        //     );
        //     $this->db->insert('online_exam_result', $inserted_array);

        // }
        return $query;
    }

    function update_online_exam_result($online_exam_id = null, $jawab = null, $isDoubt = null){

        $checker = array(
            'question_bank_id' => $online_exam_id,
            'student_id' => $this->session->userdata('login_user_id')
        );
        $updated_array = array(
            'status' => 'submitted',
            'answer_script' => $jawab,
            'isDoubt' => $isDoubt
        );

        $this->db->where($checker);
        $this->db->update('online_exam_result', $updated_array);
    }

    function update_nilai($where,$data)
    {
        $this->db->where($where);
        $this->db->update('online_exam_result',$data);
    }

    function final_result_exam($online_exam_id)
    {
        $array_final = array();
        $checker = array(
            'online_exam_id' => $online_exam_id,
            'student_id' => $this->session->userdata('login_user_id')
        );
        $online_exam_result = $this->db->get_where('online_exam_result', $checker)->result_array();
        $jwb_benar = $jwb_salah = $jwb_ragu = 0;
        $skor = $total_tanpa_ragu = $total_isi = $total_soal = $total_benar = $total_salah = $total_ragu = $total_kosong = 0;
        foreach ($online_exam_result as $question) {
              $jwb_benar = trim($question['jwb_benar']);
              $jwb_salah = trim($question['jwb_salah']);
              $jwb_ragu = trim($question['isDoubt']);
              $jwb_kosong = trim($question['answer_script']);

              
              $total_benar += $jwb_benar;
              $total_salah += $jwb_salah;
              $total_ragu += $jwb_ragu;

              if($jwb_kosong == 0)
              {
                $total_kosong++; 
              }

              $total_isi = $total_benar + $total_salah;
              $total_tanpa_ragu = $total_isi - $total_ragu;

              $total_soal++;
        }
        $skor = $total_benar / $total_soal * 100;

        $update_array = array('hasil_benar' => $total_benar,
                                'hasil_salah' => $total_salah,
                                'hasil_ragu' => $total_ragu,
                                'hasil_skor' => $skor,
                                'finish_exam' => 1);

        $this->db->where($checker);
        $this->db->update('online_exam_result', $update_array);

        $array_final['total_isi'] = $total_isi;
        $array_final['total_benar'] = $total_benar;
        $array_final['total_salah'] = $total_salah;
        $array_final['total_ragu'] = $total_ragu;
        $array_final['total_tanpa_ragu'] = $total_tanpa_ragu;
        $array_final['total_kosong'] = $total_kosong;
        $array_final['skor'] = number_format($skor, 0);

        return $array_final;
    }

    function get_online_exam($question_bank_id){

        $checker = array(
            'question_bank_id' => $online_exam_id,
            'student_id' => $this->session->userdata('login_user_id')
        );

        return $this->db->get_where('online_exam_result', array('question_bank_id' => $question_bank_id))->row()->$answer_script;
    }

    function submit_online_exam($online_exam_id = null, $answer_script = null){

        $checker = array(
            'online_exam_id' => $online_exam_id,
            'student_id' => $this->session->userdata('login_user_id')
        );
        $updated_array = array(
            'status' => 'submitted',
            'answer_script' => $answer_script
        );

        $this->db->where($checker);
        $this->db->update('online_exam_result', $updated_array);

        $this->calculate_exam_mark($online_exam_id);
    }

    function calculate_exam_mark($online_exam_id) {

        $checker = array(
            'online_exam_id' => $online_exam_id,
            'student_id' => $this->session->userdata('login_user_id')
        );

        $obtained_marks = 0;
        $online_exam_result = $this->db->get_where('online_exam_result', $checker);
        if ($online_exam_result->num_rows() == 0) {

            $data['obtained_mark'] = 0;
        }
        else{
            $results = $online_exam_result->row_array();
            $answer_script = json_decode($results['answer_script'], true);
            foreach ($answer_script as $row) {

                if ($row['submitted_answer'] == $row['correct_answers']) {

                    $obtained_marks = $obtained_marks + $this->get_question_details_by_id($row['question_bank_id'], 'mark');
                    var_dump($obtained_marks);
                }
            }
            $data['obtained_mark'] = $obtained_marks;
        }
        $total_mark = $this->get_total_mark($online_exam_id);
        $query = $this->db->get_where('online_exam', array('online_exam_id' => $online_exam_id))->row_array();
        $minimum_percentage = $query['minimum_percentage'];

        $minumum_required_marks = ($total_mark * $minimum_percentage) / 100;
        if ($minumum_required_marks > $obtained_marks) {
            $data['result'] = 'fail';
        }
        else {
            $data['result'] = 'pass';
        }
        $this->db->where($checker);
        $this->db->update('online_exam_result', $data);

    }



    function get_question_details_by_id($question_ban_id, $column_name = null){

        return $this->db->get_where('question_bank', array('question_bank_id' => $question_ban_id))->row()->$column_name;
    }



    function check_availability_for_student($online_exam_id){
        $result = $this->db->get_where('online_exam_result', array('online_exam_id' => $online_exam_id, 'student_id' => $this->session->userdata('login_user_id')))->row_array();
        return $result['status'];
    }


    function get_online_exam_result($student_id){

        $match = array('student_id' => $student_id, 'status' => 'submitted');
        $exams = $this->db->where($match)->get('online_exam_result')->result_array();
        return $exams;
    }

    function get_questions($exam_id){
        $match = array('online_exam_id' => $exam_id);
        $this->db->from('question_bank');
        $this->db->where($match);
        $this->db->order_by('no','DESC');
        $questions = $this->db->get()->result_array();
        return $questions;
    }


    function get_correct_answer($question_bank_id = null){
        $question_details = $this->db->get_where('question_bank', array('question_bank_id' => $question_bank_id))->row_array();
        return $question_details['correct_answers'];
    }
    
    function select_all_messages(){
        $sql = $this->db->query("select * from general_message order by general_message_id asc");
        return $sql->result_array();
    }





    





















}