<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media_partner_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_media($data){
		$this->db->insert('media_partners', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_media_list($id){
		$this->db->select('*')->from('media_partners');		
		$this->db->where('media_partners.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_media_details($id){
		$this->db->select('*')->from('media_partners');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_media_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("media_partners",$data);
	}
	public function delete_media($id){
		$this->db->where('id', $id);
		return $this->db->delete('media_partners');
	}
	

}