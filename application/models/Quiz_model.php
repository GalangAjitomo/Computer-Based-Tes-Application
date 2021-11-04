<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Quiz_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    function createQuizFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['submateri_id']=  html_escape($this->input->post('submateri_id'));

        $this->db->insert('quiz', $page_data);
    }

    function updateQuizFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['submateri_id']=  html_escape($this->input->post('submateri_id'));

        $this->db->where('quiz_id', $param2);
        $this->db->update('quiz', $page_data);
    }

    function deleteQuizFunction($param2){

        $this->db->where('quiz_id', $param2);
        $this->db->delete('quiz');

    }


    function selectQuiz(){
        $query = $this->db->get('quiz')->result_array();
        return $query;
    }


}