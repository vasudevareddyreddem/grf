<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issues_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_issues($data){
		$this->db->insert('issues', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_issue_article_ids($data){
		$this->db->insert('issue_wise_article_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public  function get_get_all_isseus_list($id){
		$this->db->select('issues.*,journals.title as journaltitle,grf_journal_category.category')->from('issues');
		$this->db->join('journals ', 'journals.j_id = issues.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = issues.journal_cat_id', 'left');
		$this->db->where('issues.create_by',$id);
        $return=$this->db->get()->result_array();
		foreach($return as $list){
			$article_list=$this->get_issues_wise_article_list($list['id']);
			$data[$list['id']]=$list;
			$data[$list['id']]['articles_list']=$article_list;
		}
		if(!empty($data))
		{
		return $data;
		}
		//echo '<pre>';print_r($data);exit;
	}
	
	public  function get_issues_wise_article_list($id){
		$this->db->select('issue_wise_article_list.*,journal_article_in_press.title')->from('issue_wise_article_list');
		$this->db->join('journal_article_in_press ', 'journal_article_in_press.a_id = issue_wise_article_list.article_id', 'left');
		$this->db->where('issue_wise_article_list.i_a_id',$id);
        return $this->db->get()->result_array();
	}
	public function get_conference_process_list($id){
		$this->db->select('conference_process.*,journals.title as journaltitle,grf_journal_category.category')->from('conference_process');

		$this->db->join('journals ', 'journals.j_id = conference_process.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = conference_process.journal_cat_id', 'left');
				
		$this->db->where('conference_process.create_by',$id);
        return $this->db->get()->result_array();

				
	}
	public function get_conference_process_details($id){
		$this->db->select('*')->from('conference_process');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_conference_process_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("conference_process",$data);
	}
	public function delete_conference_process($id){
		$this->db->where('id', $id);
		return $this->db->delete('conference_process');
	}
	
	public  function get_all_article_list_for_issues($cat_id,$j_id,$year){
		$this->db->select('a_id,title')->from('journal_article_in_press');		
		$this->db->where('journal_id', $j_id);
		$this->db->where('journal_cat_id', $cat_id);
		$this->db->where('year_of_article', $year);
		$this->db->where('status', 1);
        return $this->db->get()->result_array();
	}
	

}