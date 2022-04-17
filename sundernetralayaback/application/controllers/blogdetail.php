<?php defined('BASEPATH')OR exit('No direct script access allowed');
class Blogdetail extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->library('phpmailer_lib');
		$this->load->model('home_model');
		$this->tbl_blogs='rj_blogs';
		$this->tbl_services='rj_services';
		$this->tbl_specialities='rj_specialities';
		
	}

	public function index($tag_url){
	    $data=array();
		$select_w='*';
		$where_w=''.$this->tbl_blogs.'.status = 1 AND '.$this->tbl_blogs.'.blogTag ='."'$tag_url'";
		$join_w=array();
		$blogsResult=$this->home_model->fetch_data($this->tbl_blogs,$select_w,$join_w,$where_w);
		$data['blogsResult']=$blogsResult[0];
		$blogID=$data['blogsResult']['blogID'];
		
		$where_w=''.$this->tbl_blogs.'.status = 1 AND '.$this->tbl_blogs.'.blogID !='."'$blogID'";
		$join_w=array();
		$blogsMResult=$this->home_model->fetch_data($this->tbl_blogs,$select_w,$join_w,$where_w);
		$data['blogsMResult']=$blogsMResult;
		
		$where_w=''.$this->tbl_services.'.status = 1';
		$join_w=array();
		$servicesResult=$this->home_model->fetch_data($this->tbl_services,$select_w,$join_w,$where_w);
		$data['servicesResult']=$servicesResult;
		
		$where_w=''.$this->tbl_specialities.'.status = 1';
		$join_w=array();
		$specialitiesResult=$this->home_model->fetch_data($this->tbl_specialities,$select_w,$join_w,$where_w);
		$data['specialitiesResult']=$specialitiesResult;
		
		$this->load->view('common/header');
		$this->load->view('blogdetail',$data);
		$this->load->view('common/footer');
	}}