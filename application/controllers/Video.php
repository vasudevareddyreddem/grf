<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

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
		$this->load->model('Video_model');
		$this->load->model('Journal_details_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('video');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');

			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			$this->load->view('admin/video/add',$data);
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
			$data['video_list']=$this->Video_model->get_videos_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/video/list',$data);
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
			$v_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Video_model->get_video_details($v_id);
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/video/edit',$data);
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
						if(isset($_FILES['video']['name']) && $_FILES['video']['name']!=''){
								$temp = explode(".", $_FILES["video"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['video']['tmp_name'], "assets/videoarticle/" . $image);
							}else{
								$image='';
							}
					$add_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'accepting_date'=>isset($post['accepting_date'])?$post['accepting_date']:'',
					'publishing_date'=>isset($post['publishing_date'])?$post['publishing_date']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'author_name'=>isset($post['author_name'])?$post['author_name']:'',
					'article_type'=>isset($post['article_type'])?$post['article_type']:'',
					'url'=>isset($post['url'])?$post['url']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					'org_video_name'=>isset($_FILES["video"]["name"])?$_FILES["video"]["name"]:'',
					'video'=>$image,
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					//echo '<pre>';print_r($add_data);exit;
					$save=$this->Video_model->save_video($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Video successfully Added');
							redirect('video/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('video');
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
						$details=$this->Video_model->get_video_details($post['v_id']);
					if(isset($_FILES['video']['name']) && $_FILES['video']['name']!=''){
												unlink('assets/videoarticle/'.$details['video']);

								$temp = explode(".", $_FILES["video"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['video']['tmp_name'], "assets/videoarticle/" . $image);
								$org_name=$_FILES["video"]["name"];
							}else{
								$image=$details['video'];
								$org_name=$details['org_video_name'];
							}
						$update_data=array(
							'journal_id'=>isset($post['journal'])?$post['journal']:'',
							'journal_cat_id'=>isset($post['category'])?$post['category']:'',
							'accepting_date'=>isset($post['accepting_date'])?$post['accepting_date']:'',
							'publishing_date'=>isset($post['publishing_date'])?$post['publishing_date']:'',
							'title'=>isset($post['title'])?$post['title']:'',
							'author_name'=>isset($post['author_name'])?$post['author_name']:'',
							'article_type'=>isset($post['article_type'])?$post['article_type']:'',
							'url'=>isset($post['url'])?$post['url']:'',
							'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
							'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
							'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
							'org_video_name'=>isset($org_name)?$org_name:'',
							'video'=>$image,
						);
						$update=$this->Video_model->update_video_details($post['v_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','video successfully Updated');
							redirect('video/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('video/edit/'.base64_encode($post['v_id']));
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
			$f_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($status==1){
				$stat=0;
			}else{
				$stat=1;
			}
			$update_data=array(
					'status'=>$stat,
					'update_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Video_model->update_video_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Video successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Video successfully activated');
							}
							redirect('video/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('video/lists');
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
			$f_id=base64_decode($this->uri->segment(3));
			$details=$this->Video_model->get_video_details($f_id);
			
					$delete=$this->Video_model->delete_video($f_id);
					if(count($delete)>0){
						unlink('assets/videoarticle/'.$details['video']);
						$this->session->set_flashdata('success','Video successfully deleted');
						redirect('video/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('video/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
