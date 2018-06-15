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
		
		}
	public function index()
	{	
		$this->load->view('html/header');
		$this->load->view('html/journals');
		$this->load->view('html/footer');
		
	}
	public function details()
	{	
		$this->load->view('html/header');
		$this->load->view('html/journal-details');
		$this->load->view('html/footer');
		
	}
	
	
}
