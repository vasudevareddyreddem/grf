<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Journal_details_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function get_journal_category_list($id){
		$this->db->select('grf_journal_category.c_id,grf_journal_category.category')->from('grf_journal_category');		
        $this->db->where('create_by',$id);

		return $this->db->get()->result_array();	
	}
	public function save_journals($data){
		$this->db->insert('journals', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public function get_all_journal_list_details($id){
		$this->db->select('journals.*,grf_journal_category.category as cat_name')->from('journals');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = journals.category', 'left');
		$this->db->where('journals.create_by',$id);
		$this->db->order_by('journals.j_id',"desc");
		return $this->db->get()->result_array();	
	}
	
	public  function check_category_exits($name){
		$this->db->select('*')->from('journals');		
		$this->db->where('category',$name);
        return $this->db->get()->row_array();
	}
	
	public function get_journal_details($id){
		$this->db->select('*')->from('journals');		
		$this->db->where('j_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_journal_details($id,$data){
		$this->db->where('j_id',$id);
    	return $this->db->update("journals",$data);
	}
	public function delete_journal($id){
		$this->db->where('j_id', $id);
		return $this->db->delete('journals');
	}
	public function get_all_journal_list($id){
		$this->db->select('journals.title,journals.j_id')->from('journals');		
        $this->db->where('create_by',$id);

		return $this->db->get()->result_array();	
	}
	

}