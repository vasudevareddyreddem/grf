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
		
		}
	public function index()
	{	
		$data['c_url']=base_url('editors');
		$this->load->view('html/header',$data);
		$this->load->view('html/editors');
		$this->load->view('html/footer');
		
	}
	
}
