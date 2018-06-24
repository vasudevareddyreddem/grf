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
	
	/* journal banners*/
	public  function save_journals_banners($data){
		$this->db->insert('journal_banners', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public  function get_all_journal_banner_list_details($id){
		$this->db->select('journal_banners.*,journals.title as journaltitle')->from('journal_banners');
		$this->db->join('journals ', 'journals.j_id = journal_banners.journal_id', 'left');
		
        $this->db->where('journal_banners.create_by',$id);

		return $this->db->get()->result_array();
	}
	
	public  function update_journalbanner_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("journal_banners",$data);
	}
	
	public  function get_journal_banner_details($id){
		$this->db->select('journal_banners.*')->from('journal_banners');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();
	}
	public  function delete_journal_banner($b_id){
		$this->db->where('id', $b_id);
		return $this->db->delete('journal_banners');
	}
	/* journal banners*/
	
	/* journal editors*/
	public function save_journals_editors($data){
		$this->db->insert('journal_editors', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public function get_all_journal_editor_list_details($id){
		$this->db->select('journal_editors.*,journals.title as journaltitle')->from('journal_editors');
		$this->db->join('journals ', 'journals.j_id = journal_editors.journal_id', 'left');

        $this->db->where('journal_editors.create_by',$id);

		return $this->db->get()->result_array();
	}
	public  function update_journaleditors_details($id,$data){
		$this->db->where('j_e_id',$id);
    	return $this->db->update("journal_editors",$data);
	}
	public  function delete_journal_editor($j_e_id){
		$this->db->where('j_e_id', $j_e_id);
		return $this->db->delete('journal_editors');
	}
	
	public  function get_journal_editor_details($id){
		$this->db->select('journal_editors.*')->from('journal_editors');		
		$this->db->where('j_e_id',$id);
        return $this->db->get()->row_array();
	}
	
	/*save_journal_article_in_press*/
	public function save_journal_article_in_press($data){
		$this->db->insert('journal_article_in_press', $data);
		return $insert_id = $this->db->insert_id();
	}

	public function get_article_in_press_list($id){
		$this->db->select('journal_article_in_press.*,journals.title as journaltitle,grf_journal_category.category')->from('journal_article_in_press');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = journal_article_in_press.journal_cat_id', 'left');
		$this->db->where('journal_article_in_press.create_by',$id);
		return $this->db->get()->result_array();
	}
	public  function update_Article_in_press_details($a_id,$data){
		$this->db->where('a_id',$a_id);
    	return $this->db->update("journal_article_in_press",$data);
	}
	public  function get_article_in_press_details($a_id){
		$this->db->select('journal_article_in_press.*')->from('journal_article_in_press');		
		$this->db->where('a_id',$a_id);
        return $this->db->get()->row_array();
	}
	public  function delete_article_in_press($a_id){
		$this->db->where('a_id', $a_id);
		return $this->db->delete('journal_article_in_press');
	}

	/*edit  in hournal  details  purpose*/
	public function get_all_category_journal_list($a_id,$cat){
		$this->db->select('j_id,title')->from('journals');		
		$this->db->where('create_by', $a_id);
		$this->db->where('category', $cat);
		$this->db->where('status', 1);
        return $this->db->get()->result_array();
	}
		public  function get_all_article_list_for_issues($cat_id,$j_id,$year){
		$this->db->select('journal_article_in_press.*,journals.title as journaltitle,grf_journal_category.category')->from('journal_article_in_press');		
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->join('grf_journal_category ', 'grf_journal_category.c_id = journal_article_in_press.journal_cat_id', 'left');
		$this->db->where('journal_article_in_press.journal_id', $j_id);
		$this->db->where('journal_article_in_press.journal_cat_id', $cat_id);
		$this->db->where('journal_article_in_press.year_of_article', $year);
		$this->db->where('journal_article_in_press.status', 1);
        return $this->db->get()->result_array();
	}	
	

}