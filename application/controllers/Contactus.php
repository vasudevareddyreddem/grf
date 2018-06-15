<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

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
		$this->load->view('html/header');
		$this->load->view('html/contactus');
		$this->load->view('html/footer');
		
	}
	public  function post(){
		
		
		$post=$this->input->post();
		
		$addcontact=array(
		'firstName'=>isset($post['firstName'])?$post['firstName']:'',
		'lastName'=>isset($post['lastName'])?$post['lastName']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'phone'=>isset($post['phone'])?$post['phone']:'',
		'message'=>isset($post['message'])?$post['message']:'',
		'create_at'=>date('Y-m-d H:i:s'),
		);
		$save=$this->Home_model->save_contactus($addcontact);
		if(count($save)>0){
				$this->session->set_flashdata('success',"Your message was successfully sent.");
				redirect('home');
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('home');
			}
		//echo '<pre>';print_r($post);exit;
		
	}
	
	
}
