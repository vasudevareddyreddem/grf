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
		$data['c_url']=base_url('contactus');
		$data['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$data);
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
		
		//echo '<pre>';print_r($post);exit;
		
		$save=$this->Home_model->save_contactus($addcontact);
		if(count($save)>0){
				$data['details']=$post;
				$this->load->library('email');
				$this->load->library('email');
					$this->email->set_newline("\r\n");
					$this->email->set_mailtype("html");
				$this->email->from($post['email']);
				$this->email->to('contact@grfpublishers.org');
				$this->email->subject('Contact us - Request');
				//$body = $this->load->view('email/contactus.php',$data,true);
				//$html = $this->load->view('email/orderconfirmation.php', $data, true); 

				$msg='Name:'.$post['firstName'].' '.$post['lastName'].'<br> Email :'.$post['email'].'<br> Phone  number :'.$post['phone'].'<br> Message :'.$post['message'];
				$this->email->message($msg);
				//echo $body;exit;
				$this->email->send();
				
				//echo "test";exit;
				$this->session->set_flashdata('success',"Your message was successfully sent.");
				redirect('home');
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('home');
			}
		//echo '<pre>';print_r($post);exit;
		
	}
	public  function testmail(){
		
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->from('vasudevareddy549@gmail.com');
				$this->email->to('vasudevareddy549@gmail.com');
				$this->email->subject('Contact us - Request');
				$body = "hello hiii";
				$this->email->message($body);
				//echo $body;exit;
				if($this->email->send()){
					echo "fff";
				}
		
		
	}
	
	
}
