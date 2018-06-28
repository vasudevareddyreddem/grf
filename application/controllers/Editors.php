<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editors extends CI_Controller {

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
		$header['c_url']=base_url('editors');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['flyers_list']=$this->Home_model->get_flyers_list();
		$data['journals_list']=$this->Home_model->get_peer_review_process_journals_list();
		$this->load->view('html/editors',$data);
		$this->load->view('html/footer');
		
	}
	
}
