<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_procedures_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_article_procedures($data){
		$this->db->insert('article_procedures', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_article_procedures_list($id){
		$this->db->select('article_procedures.*,journals.title as journaltitle,grf_journal_category.category')->from('article_procedures');

		$this->db->join('journals ', 'journals.j_id = article_procedures.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = article_procedures.journal_cat_id', 'left');
				
		$this->db->where('article_procedures.create_by',$id);
        return $this->db->get()->result_array();

				
	}
	public function get_article_procedures_details($id){
		$this->db->select('*')->from('article_procedures');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_article_procedures_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("article_procedures",$data);
	}
	public function delete_article_procedures($id){
		$this->db->where('id', $id);
		return $this->db->delete('article_procedures');
	}
	

}