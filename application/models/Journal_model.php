<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Journal_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_journal_category($data){
		$this->db->insert('grf_journal_category', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public  function check_category_exits($name){
		$this->db->select('*')->from('grf_journal_category');		
		$this->db->where('category',$name);
        return $this->db->get()->row_array();
	}
	public function get_journal_list_details($id){
		$this->db->select('*')->from('grf_journal_category');		
		$this->db->where('grf_journal_category.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_category_details($id){
		$this->db->select('*')->from('grf_journal_category');		
		$this->db->where('c_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_category_details($id,$data){
		$this->db->where('c_id',$id);
    	return $this->db->update("grf_journal_category",$data);
	}
	public function delete_journal_category($id){
		$this->db->where('c_id', $id);
		return $this->db->delete('grf_journal_category');
	}
	

}