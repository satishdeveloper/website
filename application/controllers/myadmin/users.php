<?php if(!defined('BASEPATH'))exit('No direct script access allowed');class Users extends CI_Controller{

	public function __construct(){

		parent::__construct();$this->load->library('upload');$this->load->model('master_model');$this->OOZPGINFO["TBL"]='users';$this->OOZPGINFO['PK']='userID';$this->folder_name='contact';}

	public function listview(){$data['success']=$data['error']='';$data['middle_content']=$this->router->fetch_class().'-'.$this->router->fetch_method();if(isset($_POST['multiple_delete'])){if(isset($_POST['checkbox_del'])){if(count($_POST['checkbox_del'])!=0){$stat=0;$cnt_checkbox_del=count($_POST['checkbox_del']);for($i=0;$i<$cnt_checkbox_del;$i++){$this->master_model->updateRecord($this->OOZPGINFO["TBL"],array('status'=>$stat),array($this->OOZPGINFO['PK']=>$_POST['checkbox_del'][$i]));}$this->session->set_flashdata('success','Record(s) delete Successfully.');redirect(base_url().$this->uri->uri_string());}else{$this->session->set_flashdata('error','Select Record(s) to delete.');redirect(base_url().$this->uri->uri_string());}}else{$this->session->set_flashdata('error','Select Record(s) to delete.');redirect(base_url().$this->uri->uri_string());}}$this->load->view('admin/common-file',$data);}

public function fetchdata(){$sSearch=$this->input->post('search');$table_name=$this->OOZPGINFO['TBL'];
$select='*';
$where_like="(userEmail LIKE '%".$sSearch['value']."%' or userMobile LIKE '%".$sSearch['value']."%' or userName LIKE '%".$sSearch['value']."%')";
$currentURL=$_SERVER['HTTP_REFERER'];
$trash='trash';

    if(strpos($currentURL,$trash)!==false){
      $where=''.$this->OOZPGINFO['TBL'].'.status = 0 order by userID DESC';
    }else{
      $where=''.$this->OOZPGINFO['TBL'].'.status = 1 order by userID DESC';
    }
    
	$join=array();
	$result=$this->master_model->fetch_data($this->OOZPGINFO["TBL"],$select,$join,$where_like,$where,FALSE,false,false,false);
	$data=array();
	$cnt=1;
	foreach($result['data']as $key=>$row){
		$sub_array=array();
		$sub_array[]='<input type="checkbox" id="checkbox_del[]" name="checkbox_del[]" class="flat" value="'.$row->userID.'">';
		$sub_array[]=$cnt;
		$sub_array[]=$row->userName;
		$sub_array[]=$row->userEmail;
		$sub_array[]=$row->userMobile;
		$edit_option='';
		$sub_array[]=$edit_option.'&nbsp;&nbsp;<a href="'.base_url('myadmin/'.$this->router->fetch_class().'/view/'.$row->userID).'" title="Click here for View"><i class="fa fa-eye"  style="font-size: 25px;"></i></a>';
		$data[]=$sub_array;
		$cnt++;
	}
	$result['data']=$data;
	echo json_encode($result);exit();
}

		public function getData($status){if($status==2){$status=0;}$rows=$this->master_model->getRecords($this->OOZPGINFO["TBL"],array(''.$this->OOZPGINFO["TBL"].'.status'=>$status),''.$this->OOZPGINFO["TBL"].'.*',array('xOrder'=>'ASC'));echo json_encode(array('data'=>$rows));exit;}

		public function trash(){$data['success']=$data['error']='';if(isset($_POST['multiple_delete'])){if(isset($_POST['checkbox_del'])){if(count($_POST['checkbox_del'])!=0){$stat=1;$cnt_checkbox_del=count($_POST['checkbox_del']);for($i=0;$i<$cnt_checkbox_del;$i++){$this->master_model->deleteRecord($this->OOZPGINFO["TBL"],$this->OOZPGINFO['PK'],$_POST['checkbox_del'][$i]);}$this->session->set_flashdata('success','Record(s) delete Successfully.');redirect(base_url().$this->uri->uri_string());}else{$this->session->set_flashdata('error','Select Record(s) to delete.');redirect(base_url().$this->uri->uri_string());}}else{$this->session->set_flashdata('error','Select Record(s) to delete.');redirect(base_url().$this->uri->uri_string());}}if(isset($_POST['multiple_restore'])){if(isset($_POST['checkbox_del'])){if(count($_POST['checkbox_del'])!=0){$stat=1;$cnt_checkbox_del=count($_POST['checkbox_del']);for($i=0;$i<$cnt_checkbox_del;$i++){$this->master_model->updateRecord($this->OOZPGINFO["TBL"],array('status'=>$stat),array($this->OOZPGINFO['PK']=>$_POST['checkbox_del'][$i]));}$this->session->set_flashdata('success','Record(s) restore Successfully.');redirect(base_url().$this->uri->uri_string());}else{$this->session->set_flashdata('error','Select Record(s) to restore.');redirect(base_url().$this->uri->uri_string());}}else{$this->session->set_flashdata('error','Select Record(s) to restore.');redirect(base_url().$this->uri->uri_string());}}$data['middle_content']=$this->router->fetch_class().'-listview';$this->load->view('admin/common-file',$data);}

		public function add(){
		}

		public function edit($id){
		}

		public function view($id){$data['success']=$data['error']='';$data['fetchValue']=$this->master_model->getRecords($this->OOZPGINFO["TBL"],array(''.$this->OOZPGINFO["TBL"].'.'.$this->OOZPGINFO['PK']=>$id));$data['adminRole']=$this->master_model->getRecords('admin_role');$data['folderName']=$this->folder_name.'/';$data['middle_content']=$this->router->fetch_class().'-add';$this->load->view('admin/common-file',$data);}}