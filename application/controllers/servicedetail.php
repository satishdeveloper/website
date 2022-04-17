<?php defined('BASEPATH')OR exit('No direct script access allowed');
class Servicedetail extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->library('phpmailer_lib');
		$this->load->model('home_model');
		$this->tbl_service_utilities='rj_service_utilities';
		$this->tbl_services='rj_services';
	}

	public function index($tag_url){$data=array();
		$select_w='*';
		$where_w=''.$this->tbl_services.'.status = 1 AND '.$this->tbl_services.'.tag_url ='."'$tag_url'";
		$join_w=array();
		$servicesResult=$this->home_model->fetch_data($this->tbl_services,$select_w,$join_w,$where_w);
		$data['servicesResult']=$servicesResult[0];
		$SID=$data['servicesResult']['SID'];
		
		$select_w='*';
		$where_w=''.$this->tbl_service_utilities.'.status = 1 AND '.$this->tbl_service_utilities.'.SID ='."'$SID'";
		$join_w=array();
		$servicesUtilities=$this->home_model->fetch_data($this->tbl_service_utilities,$select_w,$join_w,$where_w);
		$data['servicesUtilities']=$servicesUtilities;
		
		$this->load->view('common/header');
		$this->load->view('servicedetail',$data);
		$this->load->view('common/footer');
	}}