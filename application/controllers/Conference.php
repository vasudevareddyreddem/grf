<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conference extends CI_Controller {

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
		$data['c_url']=base_url('conference');
		$data['scroll_data']=$this->Home_model->get_scrolling_content();
		$con['confrence_flyer_list']=$this->Home_model->get_all_confrence_flyers();
		$con['journals_list']=$this->Home_model->get_journal_list();

		$this->load->view('html/header',$data);
		$this->load->view('html/conference',$con);
		$this->load->view('html/footer');
		
	}
	
	
	
}
