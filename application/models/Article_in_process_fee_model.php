<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_in_process_fee_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_article_in_process_fee($data){
		$this->db->insert('article_in_process_fee', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_article_in_press_list($id){
		$this->db->select('article_in_process_fee.*,journals.title as journaltitle,grf_journal_category.category')->from('article_in_process_fee');

		$this->db->join('journals ', 'journals.j_id = article_in_process_fee.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = article_in_process_fee.journal_cat_id', 'left');
				
		$this->db->where('article_in_process_fee.create_by',$id);
        return $this->db->get()->result_array();

				
	}
	public function get_article_in_process_details($id){
		$this->db->select('*')->from('article_in_process_fee');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_Article_in_process_fee_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("article_in_process_fee",$data);
	}
	public function delete_article_in_process_fee($id){
		$this->db->where('id', $id);
		return $this->db->delete('article_in_process_fee');
	}
	

}