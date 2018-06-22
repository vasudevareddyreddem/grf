<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_article extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->model('News_article_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('News-article');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');

			$this->load->view('admin/news_article/add');
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function lists()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['news_list']=$this->News_article_model->get_news_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/news_article/list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function edit()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$p_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->News_article_model->get_news_details($p_id);

			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/news_article/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function addpost()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
					$add_data=array(
					'title'=>isset($post['title'])?$post['title']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'link'=>isset($post['link'])?$post['link']:'',
					'status'=>1,
					'create_by'=>$admindetails['id'],
					);
					$save=$this->News_article_model->save_news($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success',"News & Article successfully Added");
							redirect('News-article/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('News-article');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function editpost()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
						$update_data=array(
							'title'=>isset($post['title'])?$post['title']:'',
							'description'=>isset($post['description'])?$post['description']:'',
							'link'=>isset($post['link'])?$post['link']:'',
							);
						$update=$this->News_article_model->update_news_details($post['n_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success',"News & Article  successfully Updated");
							redirect('News-article/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('News-article/lists');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function status()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$u_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($status==1){
				$stat=0;
			}else{
				$stat=1;
			}
			$update_data=array(
					'status'=>$stat,
					);
					$update=$this->News_article_model->update_news_details($u_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"News & Article successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"News & Article successfully activated");
							}
							redirect('News-article/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('News-article/lists');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function delete()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$u_id=base64_decode($this->uri->segment(3));
					$delete=$this->News_article_model->delete_news($u_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success',"News & Article successfully deleted");
						redirect('News-article/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('News-article/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
