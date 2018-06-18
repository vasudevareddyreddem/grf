<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_details extends CI_Controller {

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
		$this->load->model('Journal_details_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('journal-details');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['journals_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			$this->load->view('admin/journal-details/add',$data);
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
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list_details($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/journal-details/list',$data);
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
			$j_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Journal_details_model->get_journal_details($j_id);
			$data['journals_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);

			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/journal-details/edit',$data);
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
				if(isset($_FILES['journal_banner']['name']) && $_FILES['journal_banner']['name']!=''){
							$temp = explode(".", $_FILES["journal_banner"]["name"]);
							$banner_img = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['journal_banner']['tmp_name'], "assets/banner_pics/" . $banner_img);
						}else{
							$banner_img='';
						}
				$add_data=array(
					'category'=>isset($post['category'])?$post['category']:'',
					'baneer_image'=>$banner_img,
					'title'=>isset($post['title'])?$post['title']:'',
					'alt_tags'=>isset($post['alt_tags'])?$post['alt_tags']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_keywords'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					'key_words'=>isset($post['key_words'])?$post['key_words']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'prices'=>isset($post['prices'])?$post['prices']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'update_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Journal_details_model->save_journals($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Journal successfully Added');
							redirect('journal-details/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal-details');
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
								$details=$this->Journal_details_model->get_journal_details($post['j_id']);

					//echo '<pre>';print_r($post);exit;
					if(isset($_FILES['journal_banner']['name']) && $_FILES['journal_banner']['name']!=''){
							$temp = explode(".", $_FILES["journal_banner"]["name"]);
							$banner_img = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['journal_banner']['tmp_name'], "assets/banner_pics/" . $banner_img);
						}else{
							$banner_img=$details['baneer_image'];
						}
					$update_data=array(
					'category'=>isset($post['category'])?$post['category']:'',
					'baneer_image'=>$banner_img,
					'title'=>isset($post['title'])?$post['title']:'',
					'alt_tags'=>isset($post['alt_tags'])?$post['alt_tags']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_keywords'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					'key_words'=>isset($post['key_words'])?$post['key_words']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'prices'=>isset($post['prices'])?trim($post['prices']):'',
					'update_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Journal_details_model->update_journal_details($post['j_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Journal successfully Updated');
								redirect('journal-details/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('journal-details/lists');
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
			$j_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Journal_details_model->update_journal_details($j_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Journal successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Journal successfully activated');
							}
							redirect('journal-details/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal-details/lists');
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
			$j_id=base64_decode($this->uri->segment(3));
				$details=$this->Journal_details_model->get_journal_details($j_id);
					unlink('assets/banner_pics/'.$details['baneer_image']);
			
					$delete=$this->Journal_details_model->delete_journal($j_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success','Journal successfully deleted');
							redirect('journal-details/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal-details/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function add_banners()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/journal-details/add-banners',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function addbannerpost()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
				
				//echo '<pre>';print_r($post);exit;
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$banner_img = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/journal_banner_pics/" . $banner_img);
						}else{
							$banner_img='';
						}
				$add_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'baneer_image'=>$banner_img,
					'title'=>isset($post['title'])?$post['title']:'',
					'alt_tags'=>isset($post['alt_tags'])?$post['alt_tags']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'update_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Journal_details_model->save_journals_banners($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Journal Banner successfully Added');
							redirect('journal-details/banners-list');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal-details/add-banners');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function banners_list()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['banners_list']=$this->Journal_details_model->get_all_journal_banner_list_details($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/journal-details/banner-list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function bannerstatus()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$b_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Journal_details_model->update_journalbanner_details($b_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Journal Banner successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Journal Banner successfully activated');
							}
							redirect('journal-details/banners-list');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal-details/banners-list');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function bannerdelete()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$b_id=base64_decode($this->uri->segment(3));
				$details=$this->Journal_details_model->get_journal_banner_details($b_id);
					unlink('assets/journal_banner_pics/'.$details['baneer_image']);
			
					$delete=$this->Journal_details_model->delete_journal_banner($b_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success','Journal banner successfully deleted');
							redirect('journal-details/banners-list');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal-details/banners-list');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function banneredit()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$b_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Journal_details_model->get_journal_banner_details($b_id);
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);

			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/journal-details/edit-banners',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}public function editbannerpost()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
								$details=$this->Journal_details_model->get_journal_banner_details($post['j_b_id']);

					//echo '<pre>';print_r($post);exit;
					if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						unlink('assets/journal_banner_pics/'.$details['baneer_image']);

							$temp = explode(".", $_FILES["image"]["name"]);
							$banner_img = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/journal_banner_pics/" . $banner_img);
						}else{
							$banner_img=$details['baneer_image'];
						}
					$update_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'baneer_image'=>$banner_img,
					'title'=>isset($post['title'])?$post['title']:'',
					'alt_tags'=>isset($post['alt_tags'])?$post['alt_tags']:'',
					'update_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Journal_details_model->update_journalbanner_details($post['j_b_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Journal banner successfully Updated');
								redirect('journal-details/banners-list');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('journal-details/banners-list');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function edotirs_board()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/journal-details/add-editors',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
