<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Special_issue_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->db->reconnect();
		$this->load->database("default");
	}
	
	public function save_special_issues($data){
		$this->db->insert('special_issue', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_special_issue_list($id){
		$this->db->select('special_issue.*,journals.title as journaltitle,grf_journal_category.category')->from('special_issue');

		$this->db->join('journals ', 'journals.j_id = special_issue.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = special_issue.journal_cat_id', 'left');
				
		$this->db->where('special_issue.create_by',$id);
        return $this->db->get()->result_array();

				
	}
	public function get_special_issue_details($id){
		$this->db->select('*')->from('special_issue');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_special_issue_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("special_issue",$data);
	}
	public function delete_special_issue($id){
		$this->db->where('id', $id);
		return $this->db->delete('special_issue');
	}
	

}