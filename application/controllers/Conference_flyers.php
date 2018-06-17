<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conference_flyers extends CI_Controller {

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
		$this->load->model('Conference_flyers_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('conference-flyers');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$this->load->view('admin/conference-flyers/add');
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
			$data['fly_list']=$this->Conference_flyers_model->get_flyers_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/conference-flyers/list',$data);
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
			$f_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Conference_flyers_model->get_flyers_details($f_id);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/conference-flyers/edit',$data);
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
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/conference_flyers_img/" . $image);
							}else{
								$image='';
							}
					$add_data=array(
					'title'=>isset($post['title'])?$post['title']:'',
					'title_color'=>isset($post['title_color'])?$post['title_color']:'',
					'fly_image'=>$image,
					'fly_org_image'=>isset($_FILES['image']['name'])?$_FILES['image']['name']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Conference_flyers_model->save_flyers($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Conference Flyer successfully Added');
							redirect('conference-flyers/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('conference-flyers');
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
						$details=$this->Conference_flyers_model->get_flyers_details($post['f_id']);
					if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
									unlink('assets/conference_flyers_img/'.$details['fly_image']);

								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/conference_flyers_img/" . $image);
								$org_name=$_FILES["image"]["name"];
							}else{
								$image=$details['fly_image'];
								$org_name=$details['fly_org_image'];
							}
					$update_data=array(
					'title'=>isset($post['title'])?$post['title']:'',
					'title_color'=>isset($post['title_color'])?$post['title_color']:'',
					'fly_image'=>$image,
					'fly_org_image'=>$org_name,
					'update_at'=>date('Y-m-d H:i:s'),
					);
						$update=$this->Conference_flyers_model->update_flyers_details($post['f_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Conference Flyer successfully Updated');
							redirect('conference-flyers/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('conference-flyers/lists');
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
					$update=$this->Conference_flyers_model->update_flyers_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Conference Flyer successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Conference Flyer successfully activated');
							}
							redirect('conference-flyers/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('conference-flyers/lists');
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
			$details=$this->Conference_flyers_model->get_flyers_details($f_id);
			
					$delete=$this->Conference_flyers_model->delete_flyers($f_id);
					if(count($delete)>0){
						unlink('assets/conference_flyers_img/'.$details['fly_image']);
						$this->session->set_flashdata('success','Conference Flyer successfully deleted');
						redirect('conference-flyers/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('conference-flyers/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
