<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guidelines_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_guidelines($data){
		$this->db->insert('guidelines', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_guidelines_list($id){
		$this->db->select('*')->from('guidelines');		
		$this->db->where('guidelines.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_guidelines_details($id){
		$this->db->select('*')->from('guidelines');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_guidelines_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("guidelines",$data);
	}
	public function delete_guidelines($id){
		$this->db->where('id', $id);
		return $this->db->delete('guidelines');
	}
	

}