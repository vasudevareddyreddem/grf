<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_journals_list(){
		$this->db->select('j_id,title')->from('journals');
		$this->db->where('status',1);
		return $this->db->get()->result_array();	
	}
	
	public function save_contactus($data){
		$this->db->insert('contactus', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_menuscript($data){
		$this->db->insert('menuscript_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public  function save_newsletter($data){
		$this->db->insert('newsletters', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_already_email($email){
		$this->db->select('*')->from('newsletters');		
		$this->db->where('email',$email);
        return $this->db->get()->row_array();
	}
	
	/* out souce lab chating */
	
	
	/* home  page  content  purpose*/
	
	public  function get_scrolling_content(){
		$this->db->select('*')->from('home_scroll');		
        return $this->db->get()->row_array();
	}
	public  function get_home_banners_list(){
		$this->db->select('*')->from('home_banners');
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	
	/*article*/
	public  function get_article_list(){
		$this->db->select('journal_article_in_press.a_id,journal_article_in_press.journal_id,journal_article_in_press.year_of_article,journal_article_in_press.title,journal_article_in_press.author_name,journal_article_in_press.article_type,url,journal_article_in_press.seo_title,journal_article_in_press.pdf_file,image,journal_article_in_press.create_at,journals.title as journaltitle')->from('journal_article_in_press');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');

		$this->db->where('journal_article_in_press.video_article',0);		
		$this->db->where('journal_article_in_press.status',1);		
		$this->db->order_by('journal_article_in_press.a_id',"DESC");
		$this->db->limit(7);		
        return $this->db->get()->result_array();
	}
	
	public  function get_article_htnl_data($a_id){
		$this->db->select('*')->from('journal_article_in_press');
		$this->db->where('a_id',$a_id);		
		$this->db->where('status',1);		
        return $this->db->get()->row_array();
	}
	
	public  function get_latest_updates(){
		$this->db->select('*')->from('updates');
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	public  function get_browse_by_subjects(){
		$this->db->select('journals.j_id,journals.subject,journals.seo_url')->from('journals');
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	/*article*/
	/* home  page  content  purpose*/
	
	/*peer-review-process*/
	
	public  function get_flyers_list(){
		$this->db->select('f_id,title,title_color,fly_image,fly_org_image')->from('grf_flyers');
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	public  function get_peer_review_process_journals_list(){
		$this->db->select('j_id,title,seo_url')->from('journals');
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	/*peer-review-process*/
	
	
	

}