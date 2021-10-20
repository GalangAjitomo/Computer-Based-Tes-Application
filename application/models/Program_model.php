<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Program_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    function createProgramFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['category']=  html_escape($this->input->post('category'));
        $page_data['price']=  html_escape($this->input->post('price'));

        $this->db->insert('program', $page_data);
    }

    function updateProgramFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['category']=  html_escape($this->input->post('category'));
        $page_data['price']=  html_escape($this->input->post('price'));

        $this->db->where('program_id', $param2);
        $this->db->update('program', $page_data);
    }

    function deleteProgramFunction($param2){

        $this->db->where('program_id', $param2);
        $this->db->delete('program');

    }


    function selectProgram(){
        $query = $this->db->get('program')->result_array();
        return $query;
    }


}