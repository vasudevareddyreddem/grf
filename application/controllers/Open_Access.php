<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Open_access extends CI_Controller {

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
		

               $header['c_url']=base_url('open-access');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['article_list']=$this->Home_model->get_article_list();
		$data['lastest_updates_list']=$this->Home_model->get_latest_updates();
		$data['browse_by_subjects']=$this->Home_model->get_browse_by_subjects();
		$this->load->view('html/open-access',$data);
		$this->load->view('html/footer');
		
	}
	
	
}
