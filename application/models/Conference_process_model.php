<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conference_process_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_conference_process($data){
		$this->db->insert('conference_process', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_conference_process_list($id){
		$this->db->select('conference_process.*,journals.title as journaltitle,grf_journal_category.category')->from('conference_process');

		$this->db->join('journals ', 'journals.j_id = conference_process.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = conference_process.journal_cat_id', 'left');
				
		$this->db->where('conference_process.create_by',$id);
        return $this->db->get()->result_array();

				
	}
	public function get_conference_process_details($id){
		$this->db->select('*')->from('conference_process');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_conference_process_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("conference_process",$data);
	}
	public function delete_conference_process($id){
		$this->db->where('id', $id);
		return $this->db->delete('conference_process');
	}
	

}