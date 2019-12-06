<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manuscripts_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_manuscripts($data){
		$this->db->insert('manuscripts_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_manuscripts_list($id){
		$this->db->select('ml.*,journals.title as journaltitle,grf_journal_category.category as jcat')->from('manuscripts_list as ml');
		$this->db->join('journals ', 'journals.j_id = ml.journal', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = ml.category', 'left');				
		$this->db->where('ml.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_manuscripts_details($id){
		$this->db->select('*')->from('manuscripts_list');		
		$this->db->where('m_l_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_manuscripts_details($id,$data){
		$this->db->where('m_l_id',$id);
    	return $this->db->update("manuscripts_list",$data);
	}
	public function delete_manuscripts($id){
		$this->db->where('m_l_id', $id);
		return $this->db->delete('manuscripts_list');
	}
	public function check_manuscript_exits($id){
		$this->db->select('*')->from('manuscripts_list');		
		$this->db->where('journal',$id);
        return $this->db->get()->row_array();	
	}
	

}