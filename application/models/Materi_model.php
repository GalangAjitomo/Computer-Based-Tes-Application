<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Materi_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    function createMateriFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['program_id']=  html_escape($this->input->post('program_id'));

        $this->db->insert('materi', $page_data);
    }

    function updateMateriFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['program_id']=  html_escape($this->input->post('program_id'));

        $this->db->where('materi_id', $param2);
        $this->db->update('materi', $page_data);
    }

    function deleteMateriFunction($param2){

        $this->db->where('materi_id', $param2);
        $this->db->delete('materi');

    }


    function selectMateri(){
        $query = $this->db->get('materi')->result_array();
        return $query;
    }


}