<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conference_img_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_flyers($data){
		$this->db->insert('grf_conference_images', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_flyers_list($id){
		$this->db->select('*')->from('grf_conference_images');		
		$this->db->where('grf_conference_images.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_flyers_details($id){
		$this->db->select('*')->from('grf_conference_images');		
		$this->db->where('f_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_flyers_details($id,$data){
		$this->db->where('f_id',$id);
    	return $this->db->update("grf_conference_images",$data);
	}
	public function delete_flyers($id){
		$this->db->where('f_id', $id);
		return $this->db->delete('grf_conference_images');
	}
	

}