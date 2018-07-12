<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_in_press extends CI_Controller {

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
				$data['u_url']=base_url('article-in-press');
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
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/article_in_press/add',$data);
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
			$data['article_in_press_list']=$this->Journal_details_model->get_article_in_press_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/article_in_press/list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function view()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['article_in_press_list']=$this->Journal_details_model->get_article_in_press_list($admindetails['id']);
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			$post=$this->input->post();
			if(isset($post['signup']) && $post['signup']=='submit'){
				$data['details']=$this->Journal_details_model->get_all_article_list_for_issues($post['category'],$post['journal'],$post['year_of_article']);

			}else{
				$data['details']=array();
			}
			//echo '<pre>';print_r($details);exit; 
			$this->load->view('admin/article_in_press/view',$data);
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
			$a_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Journal_details_model->get_article_in_press_details($a_id);
			$data['journals_list']=$this->Journal_details_model->get_all_category_journal_list($admindetails['id'],$data['details']['journal_cat_id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/article_in_press/edit',$data);
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
						if(isset($_FILES['pdf_file']['name']) && $_FILES['pdf_file']['name']!=''){
								$temp = explode(".", $_FILES["pdf_file"]["name"]);
								$pdf = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['pdf_file']['tmp_name'], "assets/article_in_press/" . $pdf);
							}else{
								$pdf='';
							}
							if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								$temp = explode(".", $_FILES["image"]["name"]);
								$img = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/article_in_press/" . $img);
							}else{
								$img='';
							}
							if(isset($_FILES['video']['name']) && $_FILES['video']['name']!=''){
								$temp = explode(".", $_FILES["video"]["name"]);
								$video = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['video']['tmp_name'], "assets/article_in_press/" . $video);
								$video_article=1;
							}else{
								$video='';
								$video_article=0;
							}
					$add_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'year_of_article'=>isset($post['year_of_article'])?$post['year_of_article']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'author_name'=>isset($post['author_name'])?$post['author_name']:'',
					'article_type'=>isset($post['article_type'])?$post['article_type']:'',
					'url'=>isset($post['url'])?$post['url']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					'research_article'=>isset($_REQUEST['research_article'])?$_REQUEST['research_article']:'',
					'abstract'=>isset($_REQUEST['abstract'])?$_REQUEST['abstract']:'',
					'introduction'=>isset($_REQUEST['introduction'])?$_REQUEST['introduction']:'',
					'references'=>isset($_REQUEST['references'])?$_REQUEST['references']:'',
					'figures'=>isset($_REQUEST['figures'])?$_REQUEST['figures']:'',
					'suggested_citation'=>isset($_REQUEST['suggested_citation'])?$_REQUEST['suggested_citation']:'',
					'tables'=>isset($_REQUEST['tables'])?$_REQUEST['tables']:'',
					'pdf_file'=>$pdf,
					'image'=>$img,
					'video'=>$video,
					'video_article'=>$video_article,
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Journal_details_model->save_journal_article_in_press($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Article in press successfully Added');
							redirect('article-in-press/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('article-in-press');
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
			$details=$this->Journal_details_model->get_article_in_press_details($post['a_id']);
											
							if(isset($_FILES['pdf_file']['name']) && $_FILES['pdf_file']['name']!=''){
								unlink('assets/article_in_press/'.$details['pdf_file']);
								$temp = explode(".", $_FILES["pdf_file"]["name"]);
								$pdf = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['pdf_file']['tmp_name'], "assets/article_in_press/" . $pdf);
							}else{
								$pdf=$details['pdf_file'];
							}
							if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								unlink('assets/article_in_press/'.$details['image']);
								$temp = explode(".", $_FILES["image"]["name"]);
								$img = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/article_in_press/" . $img);
							}else{
								$img=$details['image'];
							}
							if(isset($_FILES['video']['name']) && $_FILES['video']['name']!=''){
								unlink('assets/article_in_press/'.$details['video']);
								$temp = explode(".", $_FILES["video"]["name"]);
								$video = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['video']['tmp_name'], "assets/article_in_press/" . $video);
								$video_article=1;
							}else{
								$video=$details['video'];
								$video_article=$details['video_article'];
							}
							$update_data=array(
								'journal_id'=>isset($post['journal'])?$post['journal']:'',
								'journal_cat_id'=>isset($post['category'])?$post['category']:'',
								'year_of_article'=>isset($post['year_of_article'])?$post['year_of_article']:'',
								'title'=>isset($post['title'])?$post['title']:'',
								'author_name'=>isset($post['author_name'])?$post['author_name']:'',
								'article_type'=>isset($post['article_type'])?$post['article_type']:'',
								'url'=>isset($post['url'])?$post['url']:'',
								'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
								'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
								'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
								'research_article'=>isset($_REQUEST['research_article'])?$_REQUEST['research_article']:'',
								'abstract'=>isset($_REQUEST['abstract'])?$_REQUEST['abstract']:'',
								'introduction'=>isset($_REQUEST['introduction'])?$_REQUEST['introduction']:'',
								'references'=>isset($_REQUEST['references'])?$_REQUEST['references']:'',
								'figures'=>isset($_REQUEST['figures'])?$_REQUEST['figures']:'',
								'suggested_citation'=>isset($_REQUEST['suggested_citation'])?$_REQUEST['suggested_citation']:'',
								'tables'=>isset($_REQUEST['tables'])?$_REQUEST['tables']:'',
								'pdf_file'=>$pdf,
								'image'=>$img,
								'video'=>$video,
								'video_article'=>$video_article,
								'update_at'=>date('Y-m-d H:i:s'),
								);
						$update=$this->Journal_details_model->update_Article_in_press_details($post['a_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Article in press successfully Updated');
							redirect('article-in-press/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('article-in-press/lists/'.base64_encode($post['a_id']));
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
			$a_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Journal_details_model->update_Article_in_press_details($a_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Article in press successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Article in press successfully activated');
							}
							redirect('article-in-press/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('article-in-press/lists');
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
			$a_id=base64_decode($this->uri->segment(3));
			$details=$this->Journal_details_model->get_article_in_press_details($a_id);
			
					$delete=$this->Journal_details_model->delete_article_in_press($a_id);
					if(count($delete)>0){
						unlink('assets/article_in_press/'.$details['pdf_file']);
						unlink('assets/article_in_press/'.$details['image']);
						$this->session->set_flashdata('success','Article in press successfully deleted');
						redirect('article-in-press/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('article-in-press/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}public function viewstatus()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$a_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Journal_details_model->update_Article_in_press_details($a_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Article in press successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Article in press successfully activated');
							}
							redirect('article-in-press/view');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('article-in-press/view');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function viewdelete()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$a_id=base64_decode($this->uri->segment(3));
			$details=$this->Journal_details_model->get_article_in_press_details($a_id);
			
					$delete=$this->Journal_details_model->delete_article_in_press($a_id);
					if(count($delete)>0){
						unlink('assets/article_in_press/'.$details['pdf_file']);
						unlink('assets/article_in_press/'.$details['image']);
						$this->session->set_flashdata('success','Article in press successfully deleted');
						redirect('article-in-press/view');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('article-in-press/view');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
