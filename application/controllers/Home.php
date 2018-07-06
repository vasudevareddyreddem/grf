<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$header['c_url']=base_url('');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['homapage_banners']=$this->Home_model->get_home_banners_list();
		$data['article_list']=$this->Home_model->get_article_list();
		$data['lastest_updates_list']=$this->Home_model->get_latest_updates();
		$data['browse_by_subjects']=$this->Home_model->get_browse_by_subjects();

		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/index',$data);
		$this->load->view('html/footer');
		
	}

	public function for_author()
	{	
		$header['c_url']=base_url('');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['homapage_banners']=$this->Home_model->get_home_banners_list();
		$data['flyers_list']=$this->Home_model->get_flyers_list();
		$data['journals_list']=$this->Home_model->get_peer_review_process_journals_list();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/for-author',$data);
		$this->load->view('html/footer');
		
	}
	public function quick_editors()
	{	
		$header['c_url']=base_url('');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['homapage_banners']=$this->Home_model->get_home_banners_list();
		$data['flyers_list']=$this->Home_model->get_flyers_list();
		$data['journals_list']=$this->Home_model->get_peer_review_process_journals_list();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/quck-editors',$data);
		$this->load->view('html/footer');
		
	}	
	public function reviewers()
	{	
		$header['c_url']=base_url('');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['homapage_banners']=$this->Home_model->get_home_banners_list();
		$data['flyers_list']=$this->Home_model->get_flyers_list();
		$data['journals_list']=$this->Home_model->get_peer_review_process_journals_list();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/reviewers',$data);
		$this->load->view('html/footer');
		
	}
	
	public function loginpost()
	{
		if(!$this->session->userdata('userdetails'))
		{
			$post=$this->input->post();
			//echo '<pre>';print_r($post);
			$login_deta=array('email'=>$post['email_id'],'password'=>md5($post['password']));
			$check_login=$this->Admin_model->login_details($login_deta);
				$this->load->helper('cookie');

			if(isset($post['remember_me']) && $post['remember_me']==1){
					$usernamecookie = array('name' => 'username', 'value' => $post["email_id"],'expire' => time()+86500 ,'path'   => '/');
					$passwordcookie = array('name' => 'password', 'value' => $post["password"],'expire' => time()+86500,'path'   => '/');
					$remembercookie = array('name' => 'remember', 'value' => $post["remember_me"],'expire' => time()+86500,'path'   => '/');
					$this->input->set_cookie($usernamecookie);
					$this->input->set_cookie($passwordcookie);
					$this->input->set_cookie($remembercookie);
					$this->load->helper('cookie');
					$this->input->cookie('username', TRUE);
					//echo print_r($usernamecookie);exit;

					}else{
						delete_cookie('username');
						delete_cookie('password');
						delete_cookie('remember');
					}
			if(count($check_login)>0){
				$login_details=$this->Admin_model->get_admin_details($check_login['a_id']);
				$this->session->set_userdata('userdetails',$login_details);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
				redirect('admin');
			}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	
	
	public function forgotpassword()
	{	
		if(!$this->session->userdata('userdetails'))
		{
			$post=$this->input->post();
			$check_login=$this->Admin_model->email_check_details($post['forgot_password_email']);
			if(count($check_login)>0){
				
					$this->load->library('email');
					$this->email->set_newline("\r\n");
					$this->email->set_mailtype("html");
					$this->email->to($check_login['a_email_id']);
					$this->email->from('customerservice@e-healthinfra.com');
					$body = "<b> Your Account login Password is </b> : ".$check_login['a_org_password'];
					 $this->email->message($body);
					if ($this->email->send())
					{
						$this->session->set_flashdata('success',"Password sent to your registered email address. Please Check your registered email address");
						redirect('admin');
					}else{
						$this->session->set_flashdata('error'," In Localhost mail  didn't sent");
						redirect('admin');
					}
			}else{
				$this->session->set_flashdata('error',"Invalid login details. Please try again once");
				redirect('admin');
			}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	
	public  function newsletterpost(){
		$post=$this->input->post();
		if($post['email']!='' && $post['name']!=''){
			$add_data=array(
			'email'=>$post['email'],
			'name'=>$post['name'],
			'status'=>1,
			'create_at'=>date('Y-m-d H:i:s'),
			'update_at'=>date('Y-m-d H:i:s'),
			);
			$check=$this->Home_model->get_already_email($post['email']);
			if(count($check)==0){
					$save=$this->Home_model->save_newsletter($add_data);
					
					if(count($save)>0){
					$this->session->set_flashdata('success',"Newsletters subscriptions successfully sent.");
						redirect('home');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('home');
					}
			}else{
			$this->session->set_flashdata('error','Email id already Newsletters subscribed. Please use another Email id');
			redirect('home');
			}
		//echo '<pre>';print_r($post);exit;
		
		}else{
			$this->session->set_flashdata('error',"Name & Email are  required");
			redirect('home');
		}
	}
	
	public  function sameimage(){
		//echo '<pre>';print_r($_FILES);exit;
			$temp = explode(".", $_FILES["image"]["name"]);
			$image = round(microtime(true)) . '.' . end($temp);
			if(move_uploaded_file($_FILES['image']['tmp_name'], "assets/img/" . $image)){
				$result=base_url('assets/img/'.$image); 
			}
							
        echo $result;
	}
	
	
	
}
