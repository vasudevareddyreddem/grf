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
	
	
	public function get_medicine_list_details($name){
		$this->db->select('medicine_list.id,medicine_list.total_amount,medicine_list.qty,medicine_list.cgst,medicine_list.amount,medicine_list.dosage')->from('medicine_list');		
		$this->db->where('medicine_list.medicine_name',$name);
        return $this->db->get()->row_array();	
	}
	public function update_medicine_details($med_id,$data){
		$this->db->where('id',$med_id);
    	return $this->db->update("medicine_list",$data);
	}
	

}