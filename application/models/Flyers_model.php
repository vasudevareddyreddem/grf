<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flyers_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_flyers($data){
		$this->db->insert('grf_flyers', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_flyers_list($id){
		$this->db->select('*')->from('grf_flyers');		
		$this->db->where('grf_flyers.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_flyers_details($id){
		$this->db->select('*')->from('grf_flyers');		
		$this->db->where('f_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_flyers_details($id,$data){
		$this->db->where('f_id',$id);
    	return $this->db->update("grf_flyers",$data);
	}
	public function delete_flyers($id){
		$this->db->where('f_id', $id);
		return $this->db->delete('grf_flyers');
	}
	

}