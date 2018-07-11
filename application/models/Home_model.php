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
		$this->db->select('journals.j_id,journals.seo_url,grf_flyers.f_id,grf_flyers.title,grf_flyers.title_color,grf_flyers.fly_image,grf_flyers.fly_org_image')->from('grf_flyers');
		$this->db->join('journals ', 'journals.j_id = grf_flyers.journal_id', 'left');
		$this->db->where('grf_flyers.status',1);		
        return $this->db->get()->result_array();
	}
	public  function get_peer_review_process_journals_list(){
		$this->db->select('j_id,title,seo_url')->from('journals');
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	/*peer-review-process*/
	
	/* journals page*/
	public  function get_all_journals_list(){
		$this->db->select('title,j_id,subject,seo_url,baneer_image')->from('journals');
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	public function get_journals_details($j_id){
		$this->db->select('*')->from('journals');
		$this->db->where('j_id',$j_id);		
		$this->db->where('status',1);		
        return $this->db->get()->row_array();
	}
	public function get_journal_wise_article_list($j_id){
		$this->db->select('journal_article_in_press.a_id,journal_article_in_press.journal_id,journal_article_in_press.year_of_article,journal_article_in_press.title,journal_article_in_press.author_name,journal_article_in_press.article_type,url,journal_article_in_press.seo_title,journal_article_in_press.pdf_file,image,journal_article_in_press.create_at,journals.title as journaltitle')->from('journal_article_in_press');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->where('journal_article_in_press.video_article',0);		
		$this->db->where('journal_article_in_press.status',1);		
		$this->db->where('journal_article_in_press.journal_id',$j_id);		
		$this->db->order_by('journal_article_in_press.a_id',"DESC");
        return $this->db->get()->result_array();
	}
	public  function get_journal_wise_banners_list($j_id){
		$this->db->select('baneer_image,title,alt_tags')->from('journal_banners');
		$this->db->where('journal_id',$j_id);		
		$this->db->where('status',1);		
        return $this->db->get()->result_array();
	}
	public  function get_journal_wise_boardmembers_list($j_id){
		$this->db->select('j_e_id,image,name,email,country,phone,designation,position,university,biography')->from('journal_editors');
		$this->db->where('journal_id',$j_id);		
		$this->db->where('status',1);		
		$this->db->order_by('priority',"asc");		
        return $this->db->get()->result_array();
	}
	public  function get_latest_boardmembers_list(){
		$this->db->select('journals.j_id,journals.seo_url,reviewerboard.id,reviewerboard.image,reviewerboard.journal,reviewerboard.name,reviewerboard.designation,reviewerboard.country,reviewerboard.reviewer_board,reviewerboard.university,journals.title as journaltitile,journals.seo_url')->from('reviewerboard');
		$this->db->join('journals ', 'journals.j_id = reviewerboard.journal', 'left');
		$this->db->where('reviewerboard.status',1);		
		$this->db->order_by('reviewerboard.id','desc');		
        return $this->db->get()->result_array();
	}
	public  function get_journal_latest_boardmembers_list($j_id){
		$this->db->select('journal_editors.j_e_id,journal_editors.journal_id,journal_editors.image,journal_editors.name,journal_editors.email,journal_editors.phone,journal_editors.designation,journal_editors.position,journal_editors.university,journal_editors.biography,journals.title as journaltitile,journals.seo_url')->from('journal_editors');
		$this->db->join('journals ', 'journals.j_id = journal_editors.journal_id', 'left');
		$this->db->where('journal_editors.status',1);
		$this->db->where('journal_editors.journal_id',$j_id);		
		$this->db->order_by('journal_editors.j_e_id','desc');		
        return $this->db->get()->result_array();
	}
	public  function get_reviewer_boardmembers_list($j_id){
		$this->db->select('journals.j_id,journals.seo_url,reviewerboard.id,reviewerboard.image,reviewerboard.journal,reviewerboard.name,reviewerboard.designation,reviewerboard.country,reviewerboard.reviewer_board,reviewerboard.university,journals.title as journaltitile,journals.seo_url')->from('reviewerboard');
		$this->db->join('journals ', 'journals.j_id = reviewerboard.journal', 'left');
		$this->db->where('reviewerboard.status',1);		
		$this->db->where('reviewerboard.journal',$j_id);		
		$this->db->order_by('reviewerboard.id','desc');		
        return $this->db->get()->result_array();
	}
	
	public  function get_latest_special_list($j_id){
		$this->db->select('special_issue.title,special_issue.details')->from('special_issue');
		$this->db->where('journal_id',$j_id);		
		$this->db->where('status',1);
		$this->db->limit(1);		
        return $this->db->get()->row_array();
	}
	public  function get_article_process_fee($j_id){
		$this->db->select('article_in_process_fee.table')->from('article_in_process_fee');
		$this->db->where('journal_id',$j_id);		
		$this->db->where('status',1);
		$this->db->order_by('id','desc');
		$this->db->limit(1);		
        return $this->db->get()->row_array();
	}
	public  function get_archive_list($j_id){
		$this->db->select('year,number,image,id,journal_id')->from('issues');
		$this->db->where('journal_id',$j_id);		
		$this->db->where('status',1);
		$this->db->group_by('issues.year',1);
		$this->db->order_by('id','desc');
        $return=$this->db->get()->result_array();
		$cnt=0;foreach($return as $list){
			$issues_list=$this->get_issues_list($list['year']);
			$data[$cnt]=$list;
			$data[$cnt]['issues_list']=$issues_list;
		$cnt++;}
		if(!empty($data)){
			return $data;
		}
		//echo '<pre>';print_r($data);exit;
	}
	
	public  function get_issues_list($year){
		$this->db->select('year,number,image,id,journal_id')->from('issues');
		$this->db->where('year',$year);		
		$this->db->where('status',1);
		$this->db->order_by('id','desc');
        return $this->db->get()->result_array();
	}
	public  function get_editors_details($j_id){
		$this->db->select('*')->from('journal_editors');
		$this->db->where('j_e_id',$j_id);		
		$this->db->where('status',1);
        return $this->db->get()->row_array();
	}
	public  function get_all_article_list(){
		$this->db->select('journal_article_in_press.a_id,journal_article_in_press.journal_id,journal_article_in_press.year_of_article,journal_article_in_press.title,journal_article_in_press.author_name,journal_article_in_press.article_type,url,journal_article_in_press.seo_title,journal_article_in_press.pdf_file,image,journal_article_in_press.create_at,journals.title as journaltitle')->from('journal_article_in_press');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->where('journal_article_in_press.video_article',0);		
		$this->db->where('journal_article_in_press.status',1);		
		$this->db->order_by('journal_article_in_press.a_id',"DESC");
        return $this->db->get()->result_array();
	}
	
	public  function get_issue_wise_articles($iss_id){
		$this->db->select('journal_article_in_press.a_id,journal_article_in_press.journal_id,journal_article_in_press.year_of_article,journal_article_in_press.title,journal_article_in_press.author_name,journal_article_in_press.article_type,url,journal_article_in_press.seo_title,journal_article_in_press.pdf_file,image,journal_article_in_press.create_at,journals.title as journaltitle')->from('issue_wise_article_list');
		$this->db->join('journal_article_in_press ', 'journal_article_in_press.a_id = issue_wise_article_list.article_id', 'left');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->where('journal_article_in_press.video_article',0);		
		$this->db->where('issue_wise_article_list.i_a_id',$iss_id);		
		$this->db->where('journal_article_in_press.status',1);		
		$this->db->order_by('journal_article_in_press.a_id',"DESC");
        return $this->db->get()->result_array();
	}
	public  function get_current_article_list_group_by_yearss($issue_id){
		$this->db->select('journal_article_in_press.a_id,journal_article_in_press.journal_id,journal_article_in_press.year_of_article,journal_article_in_press.title,journal_article_in_press.author_name,journal_article_in_press.article_type,url,journal_article_in_press.seo_title,journal_article_in_press.pdf_file,image,journal_article_in_press.create_at,journals.title as journaltitle')->from('issue_wise_article_list');
		$this->db->join('journal_article_in_press ', 'journal_article_in_press.a_id = issue_wise_article_list.article_id', 'left');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->where('journal_article_in_press.video_article',0);		
		$this->db->where('journal_article_in_press.status',1);		
		$this->db->where('issue_wise_article_list.i_a_id',$issue_id);		
		$this->db->order_by('journal_article_in_press.a_id',"DESC");
        return $this->db->get()->result_array();
	}
	public  function get_current_article_list($issue_id){
		$this->db->select('journal_article_in_press.a_id,journal_article_in_press.journal_id,journal_article_in_press.year_of_article,journal_article_in_press.title,journal_article_in_press.author_name,journal_article_in_press.article_type,url,journal_article_in_press.seo_title,journal_article_in_press.pdf_file,image,journal_article_in_press.create_at,journals.title as journaltitle')->from('issue_wise_article_list');
		$this->db->join('journal_article_in_press ', 'journal_article_in_press.a_id = issue_wise_article_list.article_id', 'left');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->where('journal_article_in_press.video_article',0);		
		$this->db->where('journal_article_in_press.status',1);		
		$this->db->where('issue_wise_article_list.i_a_id',$issue_id);		
		$this->db->order_by('journal_article_in_press.a_id',"DESC");
        return $this->db->get()->result_array();
	}
		public function get_board_member_details($j_id){
		$this->db->select('*')->from('reviewerboard');
		$this->db->where('id',$j_id);		
		$this->db->where('status',1);
        return $this->db->get()->row_array();
		}
		
		public  function get_lastest_article_list($j_id){
		$this->db->select('journal_article_in_press.a_id,journal_article_in_press.journal_id,journal_article_in_press.year_of_article,journal_article_in_press.title,journal_article_in_press.author_name,journal_article_in_press.article_type,url,journal_article_in_press.seo_title,journal_article_in_press.pdf_file,image,journal_article_in_press.create_at,journals.title as journaltitle')->from('journal_article_in_press');
		$this->db->join('journals ', 'journals.j_id = journal_article_in_press.journal_id', 'left');
		$this->db->where('journal_article_in_press.journal_id',$j_id);		
		$this->db->where('journal_article_in_press.video_article',0);		
		$this->db->where('journal_article_in_press.status',1);		
		$this->db->order_by('journal_article_in_press.a_id',"DESC");
		 return $this->db->get()->result_array();
		}
	/* journals page*/
	
	/* video artcile list*/
	public  function get_all_confrence_flyers(){
		$this->db->select('title,fly_image,fly_org_image,title_color')->from('grf_conference_flyers');
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public  function get_journal_list(){
		$this->db->select('j_id,title,seo_url')->from('journals');
		$this->db->where('status',1);
		$this->db->limit(6);		
		$this->db->order_by('j_id',"desc");		
        return $this->db->get()->result_array();
	}
	/* video artcile list*/
	

}