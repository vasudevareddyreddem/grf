<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unsubscribes_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	
	public function get_unsubscribes_list_details(){
		$this->db->select('*')->from('newsletters');		
        return $this->db->get()->result_array();	
	}
	public function get_unsubscribes_details($id){
		$this->db->select('*')->from('newsletters');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();
	}
	public function get_already_email($email){
		$this->db->select('*')->from('newsletters');		
		$this->db->where('email',$email);
        return $this->db->get()->row_array();
	}
	public function update_unsubscribes_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("newsletters",$data);
	}
	public function delete_unsubscribes($id){
		$this->db->where('id', $id);
		return $this->db->delete('newsletters');
	}
	
	public function update_unsubscribes_details_with_email($data){
		$this->db->insert('newsletters', $data);
		return $insert_id = $this->db->insert_id();
	}
	

}