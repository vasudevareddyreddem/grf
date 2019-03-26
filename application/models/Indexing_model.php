<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Indexing_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_indexing($data){
		$this->db->insert('indexing', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_indexing_list($id){
		$this->db->select('*')->from('indexing');		
		$this->db->where('indexing.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_indexing_details($id){
		$this->db->select('*')->from('indexing');		
		$this->db->where('i_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_indexing_details($id,$data){
		$this->db->where('i_id',$id);
    	return $this->db->update("indexing",$data);
	}
	public function delete_indexing($id){
		$this->db->where('i_id', $id);
		return $this->db->delete('indexing');
	}
	

}