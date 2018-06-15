<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

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
		
		//echo base_url();exit;
		$data['c_url']=base_url('membership');
		$this->load->view('html/header',$data);
		$this->load->view('html/membership');
		$this->load->view('html/footer');
		
	}
	
}
