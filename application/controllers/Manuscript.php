<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manuscript extends CI_Controller {

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
		$data['c_url']=base_url('manuscript');
		$data['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$data);
		$data['journals_list']=$this->Home_model->get_journals_list();
		$this->load->view('html/menuscript',$data);
		$this->load->view('html/footer');
		
	}
	public  function post(){
		
		
		$post=$this->input->post();
		if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/menuscript/" . $image);
						}else{
							$image='';
						}
		$addcontact=array(
		'title'=>isset($post['title'])?$post['title']:'',
		'firstName'=>isset($post['firstName'])?$post['firstName']:'',
		'lastName'=>isset($post['lastName'])?$post['lastName']:'',
		'university'=>isset($post['university'])?$post['university']:'',
		'country'=>isset($post['country'])?$post['country']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'phone'=>isset($post['phone'])?$post['phone']:'',
		'menuscript_title'=>isset($post['menuscript_title'])?$post['menuscript_title']:'',
		'address'=>isset($post['address'])?$post['address']:'',
		'message'=>isset($post['message'])?$post['message']:'',
		'journel'=>isset($post['journel'])?$post['journel']:'',
		'abstract'=>isset($post['abstract'])?$post['abstract']:'',
		'image'=>$image,
		'create_at'=>date('Y-m-d H:i:s'),
		);
				
		$save=$this->Home_model->save_menuscript($addcontact);
		if(count($save)>0){
			
				$data['details']=$post;
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->from($post['email']);
				$this->email->to('contact@grfpublishers.org');
				$this->email->subject('Menuscript - Request');
				//$body = $this->load->view('email/menuscript',$data,TRUE);
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
					$pdfFilePath=base_url('assets/menuscript/'.$image);
					$this->email->attach($pdfFilePath);
				}else{
					$pdfFilePath='';
				}
				
				
				$msg='Title :'.$post['title'].
				'<br> Name:'.$post['firstName'].' '.$post['lastName'].
				'<br> University :'.$post['university'].
				'<br> Country :'.$post['country'].
				'<br> Email :'.$post['email'].
				'<br> Phone  number :'.$post['phone'].
				'<br> Menuscript Title :'.$post['menuscript_title'].
				'<br> Address :'.$post['address'].
				'<br> Message :'.$post['message'].
				'<br> Journel :'.$post['journel'].
				'<br> abstract :'.$post['abstract'];
				//$this->email->attach($pdfFilePath);
				$this->email->message($msg);
				//echo $msg;exit;
				$this->email->send();	
			
				$this->session->set_flashdata('success',"Your message was successfully sent.");
				redirect('home');
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('home');
			}
		
	}
	
	
}
