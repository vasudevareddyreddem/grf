<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Latestupdates_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_update($data){
		$this->db->insert('updates', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_updates_list($id){
		$this->db->select('*')->from('updates');		
		$this->db->where('updates.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_updates_details($id){
		$this->db->select('*')->from('updates');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_updates_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("updates",$data);
	}
	public function delete_updates($id){
		$this->db->where('id', $id);
		return $this->db->delete('updates');
	}
	public function get_scroll_data_list($id){
		$this->db->select('*')->from('home_scroll');		
		//$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_scroll_data_list($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("home_scroll",$data);
	}
	

}