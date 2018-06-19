<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

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
		$this->load->model('Testimonial_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('testimonial');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$this->load->view('admin/testimonial/add');
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
			$data['testimonial_list']=$this->Testimonial_model->get_testimonial_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/testimonial/list',$data);
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
			$data['details']=$this->Testimonial_model->get_testimonial_details($f_id);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/testimonial/edit',$data);
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
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/testimonial/" . $image);
							}else{
								$image='';
							}
					$add_data=array(
					'name'=>isset($post['name'])?$post['name']:'',
					'professional'=>isset($post['professional'])?$post['professional']:'',
					'image'=>$image,
					'description'=>isset($post['description'])?$post['description']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Testimonial_model->save_testimonial($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Testimonial successfully Added');
							redirect('testimonial/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('testimonial');
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
			$details=$this->Testimonial_model->get_testimonial_details($post['t_id']);
					if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								unlink('assets/testimonial/'.$details['image']);

								$temp = explode(".", $_FILES["image"]["name"]);
								$image = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/testimonial/" . $image);
							}else{
								$image=$details['image'];
							}
							$update_data=array(
							'name'=>isset($post['name'])?$post['name']:'',
							'professional'=>isset($post['professional'])?$post['professional']:'',
							'image'=>$image,
							'description'=>isset($post['description'])?$post['description']:'',
							'update_at'=>$admindetails['id'],
							);
						$update=$this->Testimonial_model->update_testimonial_details($post['t_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Testimonial successfully Updated');
							redirect('testimonial/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('testimonial');
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
			$t_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Testimonial_model->update_testimonial_details($t_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Testimonial successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Testimonial successfully activated');
							}
							redirect('testimonial/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('testimonial/lists');
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
			$t_id=base64_decode($this->uri->segment(3));
			$details=$this->Testimonial_model->get_testimonial_details($t_id);
			
					$delete=$this->Testimonial_model->delete_testimonial($t_id);
					if(count($delete)>0){
						unlink('assets/testimonial/'.$details['image']);
						$this->session->set_flashdata('success','Testimonial successfully deleted');
						redirect('testimonial/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('testimonial/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
