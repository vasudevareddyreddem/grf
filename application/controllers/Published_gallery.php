<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Published_gallery extends CI_Controller {

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
		$this->load->model('Published_gallery_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('published-gallery');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');

			$this->load->view('admin/published/add');
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
			$data['gallery_list']=$this->Published_gallery_model->get_gallery_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/published/list',$data);
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
			$data['details']=$this->Published_gallery_model->get_published_gallery_details($p_id);

			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/published/edit',$data);
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
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/published_gallery/" . $image);
							}else{
								$image='';
							}
					$add_data=array(
					'image'=>$image,
					'alt_tags'=>isset($post['alt_tags'])?$post['alt_tags']:'',
					'status'=>1,
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Published_gallery_model->save_gallery($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success',"Published Gallery successfully Added");
							redirect('published-gallery/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('published-gallery');
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
			$details=$this->Published_gallery_model->get_published_gallery_details($post['p_id']);
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								unlink('assets/published_gallery/'.$details['image']);
								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/published_gallery/" . $image);
								$org_name=$_FILES["image"]["name"];
							}else{
								$image=$details['image'];
							}
						$update_data=array(
							'image'=>$image,
							'alt_tags'=>isset($post['alt_tags'])?$post['alt_tags']:'',
							);
						$update=$this->Published_gallery_model->update_gallery_details($post['p_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Published Gallery successfully Updated");
							redirect('published-gallery/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('published-gallery/lists');
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
					$update=$this->Published_gallery_model->update_gallery_details($u_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Published Gallery successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"Published Gallery successfully activated");
							}
							redirect('published-gallery/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('published-gallery/lists');
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
				$details=$this->Published_gallery_model->get_published_gallery_details($u_id);
					unlink('assets/published_gallery/'.$details['image']);

					$delete=$this->Published_gallery_model->delete_Published($u_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success',"Published Gallery successfully deleted");
						redirect('published-gallery/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('published-gallery/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
