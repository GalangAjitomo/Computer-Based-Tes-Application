<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Submateri_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    function createSubmateriFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['materi_id']=  html_escape($this->input->post('materi_id'));

        $this->db->insert('Submateri', $page_data);
    }

    function updateSubmateriFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['materi_id']=  html_escape($this->input->post('materi_id'));

        $this->db->where('Submateri_id', $param2);
        $this->db->update('Submateri', $page_data);
    }

    function deleteSubmateriFunction($param2){

        $this->db->where('Submateri_id', $param2);
        $this->db->delete('Submateri');

    }

    function selectSubmateri(){
        $query = $this->db->get('Submateri')->result_array();
        return $query;
    }


}