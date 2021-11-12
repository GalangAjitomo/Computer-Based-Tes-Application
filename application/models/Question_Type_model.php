<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Question_Type_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    function createQuestion_TypeFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));

        $this->db->insert('question_type', $page_data);
    }

    function updateQuestion_TypeFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));

        $this->db->where('question_type_id', $param2);
        $this->db->update('question_type', $page_data);
    }

    function deleteQuestion_TypeFunction($param2){

        $this->db->where('question_type_id', $param2);
        $this->db->delete('question_type');

    }


    function selectquestion_type(){
        $query = $this->db->get('question_type')->result_array();
        return $query;
    }


}