<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journals extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
			$this->load->model('Home_model');
		
		}
	public function index()
	{	
		$data['c_url']=base_url('journals');
		$data['scroll_data']=$this->Home_model->get_scrolling_content();
		$data['journals_list']=$this->Home_model->get_all_journals_list();
		$this->load->view('html/header',$data);
		$this->load->view('html/journals');
		$this->load->view('html/footer');
		
	}
	public function editors_profile()
	{	
		$header['c_url']=base_url('journals');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		
		$editor_id=base64_decode($this->uri->segment(3));
		$data['editor_details']=$this->Home_model->get_editors_details($editor_id);
		$data['flyers_list']=$this->Home_model->get_flyers_list();
		$data['journals_list']=$this->Home_model->get_peer_review_process_journals_list();
		$this->load->view('html/profile',$data);
		$this->load->view('html/footer');
		
	}
	public function board_profile()
	{	
		$header['c_url']=base_url('journals');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		
		$editor_id=base64_decode($this->uri->segment(3));
		$data['board_member_details']=$this->Home_model->get_board_member_details($editor_id);
		$data['flyers_list']=$this->Home_model->get_flyers_list();
		$data['journals_list']=$this->Home_model->get_peer_review_process_journals_list();
		$this->load->view('html/boardprofile',$data);
		$this->load->view('html/footer');
		
	}
	public function archive()
	{	
		$header['c_url']=base_url('journals');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		
		$issue_id=base64_decode($this->uri->segment(3));
		$data['latest_boardmembers']=$this->Home_model->get_latest_boardmembers_list();
		//echo '<pre>';print_r($data);exit;
		$data['article_list']=$this->Home_model->get_issue_wise_articles($issue_id);
		//echo '<pre>';print_r($data['article_list']);exit;
		$this->load->view('html/archive',$data);
		$this->load->view('html/footer');
		
	}
	public function view()
	{	
		$header['c_url']=base_url('journals');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$j_id=base64_decode($this->uri->segment(3));
		$data['scroll_data']=$this->Home_model->get_scrolling_content();
		$data['journals_details']=$this->Home_model->get_journals_details($j_id);
		$data['article_list']=$this->Home_model->get_journal_wise_article_list($j_id);
		$data['homapage_banners']=$this->Home_model->get_journal_wise_banners_list($j_id);
		$data['board_members']=$this->Home_model->get_journal_wise_boardmembers_list($j_id);
		$data['latest_editors']=$this->Home_model->get_journal_latest_boardmembers_list($j_id);
		$data['reviewer_boardmembers']=$this->Home_model->get_reviewer_boardmembers_list($j_id);
		$data['special_issue']=$this->Home_model->get_latest_special_list($j_id);
		$data['article_process_fee']=$this->Home_model->get_article_process_fee($j_id);
		$data['archive_list']=$this->Home_model->get_archive_list($j_id);
		
		
		$data['lastest_article']=$this->Home_model->get_lastest_article_list($j_id);
		//echo '<pre>';print_r($data['reviewer_boardmembers']);exit
		//echo $data['archive_list'][0]['issues_list'][0]['id'];
		
		if(isset($data['archive_list'][0]['issues_list'][0]['id']) && $data['archive_list'][0]['issues_list'][0]['id']!=''){
			$data['current_issue_list']=$this->Home_model->get_current_article_list_group_by_yearss($data['archive_list'][0]['issues_list'][0]['id']);
		}else{
			$data['current_issue_list']=array();
		}
		//echo '<pre>';print_r($data['reviewer_boardmembers']);exit;
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/journal-details',$data);
		$this->load->view('html/footer');
		
	}
	
	
	
}
