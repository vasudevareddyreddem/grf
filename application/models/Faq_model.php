<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_faq($data){
		$this->db->insert('faqs', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_faqs_list($id){
		$this->db->select('*')->from('faqs');		
		$this->db->where('faqs.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_faq_details($id){
		$this->db->select('*')->from('faqs');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_faq_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("faqs",$data);
	}
	public function delete_updates($id){
		$this->db->where('id', $id);
		return $this->db->delete('faqs');
	}
	

}