<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_testimonial($data){
		$this->db->insert('testimonial', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_testimonial_list($id){
		$this->db->select('*')->from('testimonial');		
		$this->db->where('testimonial.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_testimonial_details($id){
		$this->db->select('*')->from('testimonial');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_testimonial_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("testimonial",$data);
	}
	public function delete_testimonial($id){
		$this->db->where('id', $id);
		return $this->db->delete('testimonial');
	}
	

}