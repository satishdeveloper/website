<?php defined('BASEPATH')OR exit('No direct script access allowed');
class Specialitydetail extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->library('phpmailer_lib');
		$this->load->model('home_model');
		$this->tbl_specialities='rj_specialities';
	}

	public function index($tag_url){
	    $data=array();
		$select_w='*';
		$where_w=''.$this->tbl_specialities.'.status = 1 AND '.$this->tbl_specialities.'.tag_url ='."'$tag_url'";
		$join_w=array();
		$specialityResult=$this->home_model->fetch_data($this->tbl_specialities,$select_w,$join_w,$where_w);
		$data['specialityResult']=$specialityResult[0];
		$SPID=$data['specialityResult']['SPID'];
		
		$this->load->view('common/header');
		$this->load->view('specialitydetail',$data);
		$this->load->view('common/footer');
	}}