<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

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
	public function view()
	{	
		$header['c_url']=base_url('');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$a_id=base64_decode($this->uri->segment(3));
		if($a_id==''){
			redirect('');
		}
		$data['article_details']=$this->Home_model->get_article_htnl_data($a_id);
		//echo $this->db->last_query();
		//echo '<pre>';print_r($data);exit;
		$header['meta_title']=isset($data['article_details']['seo_title'])?$data['article_details']['seo_title']:'';
		$header['meta_keywords']=isset($data['article_details']['seo_keyword'])?$data['article_details']['seo_keyword']:'';
		$header['meta_description']=isset($data['article_details']['seo_description'])?$data['article_details']['seo_description']:'';
		$this->load->view('html/header',$header);

		$this->load->view('html/html',$data);
		$this->load->view('html/footer');
		
		
	}
	public function lists()
	{	
		$header['c_url']=base_url('');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['article_list']=$this->Home_model->get_all_article_list();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/view-all',$data);
		$this->load->view('html/footer');
	}
	
	
	
}
