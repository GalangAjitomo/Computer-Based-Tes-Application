<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');	
                $this->load->model('admin_model');
                $this->load->model('program_model');
                $this->load->model('student_model');
                $this->load->model('materi_model');
                $this->load->model('submateri_model');
                $this->load->model('quiz_model');
                /********** *Set your default time zone here **********/
                timezone();
        
               
    }

    public function index() {
        if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('admin_login') == 1) redirect(base_url(). 'admin/dashboard', 'refresh');
    
    }

    function dashboard() {

        if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
        
       	$page_data['page_name'] = 'dashboard';
        $page_data['page_title'] =  get_phrase('Admin Dashboard');
        $this->load->view('backend/index', $page_data);
    }

    function manage_profile($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'update'){
            $this->admin_model->updateAdminInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/manage_profile', 'refresh');
        }

        if($param1 == 'changePassword'){

            $this->admin_model->changeAdminPasswordInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/manage_profile', 'refresh');

        }

        $page_data['page_name'] = 'manage_profile';
        $page_data['page_title'] =  get_phrase('Manage Profile');
        $this->load->view('backend/index', $page_data);
    }

    function student($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->student_model->createStudentFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/student', 'refresh');
        }

        if($param1 == 'update'){
            $this->student_model->updateStudentFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/student', 'refresh');
        }

        if($param1 == 'delete'){
            $this->student_model->deleteStudentFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/student', 'refresh');
        }

        $page_data['page_name'] = 'student';
        $page_data['page_title'] =  get_phrase('Manage Student');
        $this->load->view('backend/index', $page_data);

    }

    function program($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->program_model->createProgramFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/program', 'refresh');
        }

        if($param1 == 'update'){
            $this->program_model->updateProgramFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/program', 'refresh');
        }

        if($param1 == 'delete'){
            $this->program_model->deleteProgramFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/program', 'refresh');
        }

        $page_data['page_name'] = 'program';
        $page_data['page_title'] =  get_phrase('Manage program');
        $this->load->view('backend/index', $page_data);

    }

    function materi($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->materi_model->createMateriFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/materi', 'refresh');
        }

        if($param1 == 'update'){
            $this->materi_model->updateMateriFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/materi', 'refresh');
        }

        if($param1 == 'delete'){
            $this->materi_model->deleteMateriFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/materi', 'refresh');
        }

        $page_data['page_name'] = 'materi';
        $page_data['page_title'] =  get_phrase('Manage materi');
        $this->load->view('backend/index', $page_data);

    }

    function submateri($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->submateri_model->createSubmateriFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/submateri', 'refresh');
        }

        if($param1 == 'update'){
            $this->submateri_model->updateSubmateriFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/submateri', 'refresh');
        }

        if($param1 == 'delete'){
            $this->submateri_model->deleteSubmateriFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/submateri', 'refresh');
        }

        $page_data['page_name'] = 'submateri';
        $page_data['page_title'] =  get_phrase('Manage submateri');
        $this->load->view('backend/index', $page_data);

    }

    function quiz($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->quiz_model->createQuizFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/quiz', 'refresh');
        }

        if($param1 == 'update'){
            $this->quiz_model->updateQuizFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/quiz', 'refresh');
        }

        if($param1 == 'delete'){
            $this->quiz_model->deleteQuizFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/quiz', 'refresh');
        }

        $page_data['page_name'] = 'quiz';
        $page_data['page_title'] =  get_phrase('Manage Quiz');
        $this->load->view('backend/index', $page_data);

    }


    function create_online_exam(){
        $page_data['page_name'] = 'add_online_exam';
        $page_data['page_title'] =  get_phrase('Online Examination');
        $this->load->view('backend/index', $page_data);
    }

    function get_class_section_subject ($class_id){
        $page_data['class_id'] = $class_id;
        $this->load->view('backend/admin/class_routine_section_subject_selector', $page_data);
    }

    function manage_online_exam ($param1 = null, $param2 = null, $param3 = null){
        
        $running_year = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
        
        if($param1 == ''){
           
            $match = array('status !=' => 'expired', 'running_year' => $running_year);
            $page_data['status'] = 'active';
            $this->db->order_by('exam_date', 'desc');
            $page_data['online_exams'] = $this->db->where($match)->get('online_exam')->result_array();
        }

        if($param1 == 'expired'){
 
             $match = array('status' => 'expired', 'running_year' => $running_year);
             $page_data['status'] = 'expired';
             $this->db->order_by('exam_date', 'desc');
             $page_data['online_exams'] = $this->db->where($match)->get('online_exam')->result_array();
         }

        if($param1 == 'create'){

            if ($this->input->post('class_id') > 0 && $this->input->post('section_id') > 0 && $this->input->post('subject_id') > 0) {
                $this->crud_model->create_online_exam();
                $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
                redirect(site_url('admin/manage_online_exam'), 'refresh');
            }
            else {
                $this->session->set_flashdata('error_message', get_phrase('ensure subject, class and section are selected'));
                redirect(base_url() . 'admin/manage_online_exam', 'refresh');
            }
        }

        if($param1 == 'edit'){
            if($this->input->post('class_id') > 0 && $this->input->post('subject_id') > 0 && $this->input->post('section_id') > 0){
                $this->crud_model->update_online_exam();
                $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
                redirect(base_url() . 'admin/manage_online_exam', 'refresh');
            }
            else {
                $this->session->set_flashdata('error_message', get_phrase('ensure subject, class and section are selected'));
                redirect(base_url() . 'admin/manage_online_exam', 'refresh');
            }
        }

        if($param1 == 'delete'){
            $this->crud_model->delete_online_exam($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/manage_online_exam', 'refresh');
        }


        $page_data['page_name'] = 'manage_online_exam';
        $page_data['page_title'] =  get_phrase('Online Examination');
        $this->load->view('backend/index', $page_data);

    }


    function manage_online_exam_question($online_exam_id = null, $task = null, $type = null){

        if ($task == 'add') {
            if ($type == 'multiple_choice') {
                $this->crud_model->add_multiple_choice_question_to_online_exam($online_exam_id);
            }
            elseif ($type == 'true_false') {
                $this->crud_model->add_true_false_question_to_online_exam($online_exam_id);
            }
            elseif ($type == 'fill_in_the_blanks') {
                $this->crud_model->add_fill_in_the_blanks_question_to_online_exam($online_exam_id);
            }
            redirect(site_url('admin/manage_online_exam_question/'.$online_exam_id), 'refresh');
        }

        $page_data['online_exam_id'] = $online_exam_id;
        $page_data['page_name'] = 'manage_online_exam_question';
        $page_data['page_title'] = $this->db->get_where('online_exam', array('online_exam_id'=>$online_exam_id))->row()->title;
        $this->load->view('backend/index', $page_data);
    }



    function load_question_type($type, $online_exam_id) {
        $page_data['question_type'] = $type;
        $page_data['online_exam_id'] = $online_exam_id;
        $this->load->view('backend/admin/online_exam_add_'.$type, $page_data);
    }


    function manage_multiple_choices_options() {
        $page_data['number_of_options'] = $this->input->post('number_of_options');
        $this->load->view('backend/admin/manage_multiple_choices_options', $page_data);
    }

    function delete_question_from_online_exam($question_id){
        $online_exam_id = $this->db->get_where('question_bank', array('question_bank_id' => $question_id))->row()->online_exam_id;
        $this->crud_model->delete_question_from_online_exam($question_id);
        
        $this->session->set_flashdata('flash_message' , get_phrase('Data deleted successfully'));
        redirect(base_url() . 'admin/manage_online_exam_question/'. $online_exam_id, 'refresh');
    }


    function update_online_exam_question($question_id = null, $task = null, $online_exam_id = null) {
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        $online_exam_id = $this->db->get_where('question_bank', array('question_bank_id' => $question_id))->row()->online_exam_id;
        $type = $this->db->get_where('question_bank', array('question_bank_id' => $question_id))->row()->type;
        if ($task == "update") {
            if ($type == 'multiple_choice') {
                $this->crud_model->update_multiple_choice_question($question_id);
            }
            elseif($type == 'true_false'){
                $this->crud_model->update_true_false_question($question_id);
            }
            elseif($type == 'fill_in_the_blanks'){
                $this->crud_model->update_fill_in_the_blanks_question($question_id);
            }
            redirect(site_url('admin/manage_online_exam_question/'.$online_exam_id), 'refresh');
        }
        $page_data['question_id'] = $question_id;
        $page_data['page_name'] = 'update_online_exam_question';
        $page_data['page_title'] = get_phrase('update_question');
        $this->load->view('backend/index', $page_data);
    }

    function update_online_exam($param1 = null){

        $page_data['online_exam_id'] = $param1;
        $page_data['page_name'] = 'edit_online_exam';
        $page_data['page_title'] = get_phrase('update exam');
        $this->load->view('backend/index', $page_data);
    }

    function manage_online_exam_status($online_exam_id = null, $status = null){
        $this->crud_model->manage_online_exam_status($online_exam_id, $status);
        redirect(site_url('admin/manage_online_exam'), 'refresh');
    }


    function view_online_exam_result($online_exam_id){
        $page_data['online_exam_id'] = $online_exam_id;
        $page_data['page_name'] = 'view_online_exam_result';
        $page_data['page_title'] = get_phrase('result');
        $this->load->view('backend/index', $page_data);
    }


    function general_message(){

        $page_data['message'] = $this->input->post('message');
        $page_data['user_id'] = $this->input->post('user_id');
        $page_data['date'] = strtotime(date('Y-m-d'));

        $sql = "select * from general_message order by general_message_id desc limit 1";
        $return_query = $this->db->query($sql)->row()->general_message_id + 1;
        $page_data['general_message_id'] = $return_query;
        $this->db->insert('general_message', $page_data);
        echo json_encode($page_data);
    }







}
