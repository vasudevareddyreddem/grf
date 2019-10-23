<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

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
		$this->load->model('Country_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('country');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->library('zip');
		$this->load->dbutil();
		$db_format=array('format'=>'sql','filename'=>date('Y-m-d').'.sql');
		$backup=& $this->dbutil->backup($db_format);
		$dbname='backup-on-'.date('Y-m-d').'.sql';
		$save='assets/vendor/dbbackup/'.$dbname;
		write_file($save,$backup);
		force_download($dbname,$backup);
	}
	
	
	
	
}
