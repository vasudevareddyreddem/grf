<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Published_gallery_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_gallery($data){
		$this->db->insert('published_gallery', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_gallery_list($id){
		$this->db->select('*')->from('published_gallery');		
		$this->db->where('published_gallery.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_published_gallery_details($id){
		$this->db->select('*')->from('published_gallery');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_gallery_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("published_gallery",$data);
	}
	public function delete_Published($id){
		$this->db->where('id', $id);
		return $this->db->delete('published_gallery');
	}
	

}