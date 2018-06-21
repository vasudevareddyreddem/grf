<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviewerboard_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_reviwes($data){
		$this->db->insert('reviewerboard', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_revirewers_list($id){
		$this->db->select('*')->from('reviewerboard');		
		$this->db->where('reviewerboard.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_reviewer_details($id){
		$this->db->select('*')->from('reviewerboard');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_reviewer_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("reviewerboard",$data);
	}
	public function delete_Reviewer($id){
		$this->db->where('id', $id);
		return $this->db->delete('reviewerboard');
	}
	

}