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
	public function update_medicine_details($med_id,$data){
		$this->db->where('id',$med_id);
    	return $this->db->update("medicine_list",$data);
	}
	

}