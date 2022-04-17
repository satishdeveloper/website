<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class Blog extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->library('upload');
		$this->load->model('master_model');
		$this->OOZPGINFO["TBL"]='blogs';
		$this->OOZPGINFO['PK']='blogID';
		$this->folder_name='blogs';
	}

	public function listview(){
		$data['success']=$data['error']='';
		$data['middle_content']=$this->router->fetch_class().'-'.$this->router->fetch_method();
		if(isset($_POST['multiple_delete'])){
			if(isset($_POST['checkbox_del'])){
				if(count($_POST['checkbox_del'])!=0){
					$stat=0;
					$cnt_checkbox_del=count($_POST['checkbox_del']);
					for($i=0;$i<$cnt_checkbox_del;$i++){
						$this->master_model->updateRecord($this->OOZPGINFO["TBL"],array('status'=>$stat),array($this->OOZPGINFO['PK']=>$_POST['checkbox_del'][$i]));
					}
					$this->session->set_flashdata('success','Record(s) delete Successfully.');
					redirect(base_url().$this->uri->uri_string());
				}else{
					$this->session->set_flashdata('error','Select Record(s) to delete.');
					redirect(base_url().$this->uri->uri_string());
				}
			}else{
				$this->session->set_flashdata('error','Select Record(s) to delete.');
				redirect(base_url().$this->uri->uri_string());
			}
		}
		$this->load->view('admin/common-file',$data);
	}

public function fetchdata(){$sSearch=$this->input->post('search');$table_name=$this->OOZPGINFO['TBL'];$select=''.$this->OOZPGINFO['TBL'].'.blogID,
		'.$this->OOZPGINFO['TBL'].'.blogTitle,
		'.$this->OOZPGINFO['TBL'].'.blogSynopsis, 
		'.$this->OOZPGINFO['TBL'].'.status,
		'.$this->OOZPGINFO['TBL'].'.blogImage,
		'.$this->OOZPGINFO['TBL'].'.blogDescription ,
		'.$this->OOZPGINFO['TBL'].'.blogOrder,
		'.$this->OOZPGINFO['TBL'].'.youtube_link';$where_like="(blogSynopsis LIKE '%".$sSearch['value']."%' or blogTitle LIKE '%".$sSearch['value']."%')";
		$currentURL=$_SERVER['HTTP_REFERER'];
		$trash='trash';
		if(strpos($currentURL,$trash)!==false){
			$where=''.$this->OOZPGINFO['TBL'].'.status = 0';
		}else{
			$where=''.$this->OOZPGINFO['TBL'].'.status = 1';
		}
		$join=array();
		$result=$this->master_model->fetch_data($this->OOZPGINFO["TBL"],$select,$join,$where_like,$where,FALSE,false,false,false);
		$data=array();
		$cnt=1;
		foreach($result['data']as $key=>$row){
			$sub_array=array();
			$sub_array[]='<input type="checkbox" id="checkbox_del[]" name="checkbox_del[]" class="flat" value="'.$row->blogID.'">';
			$sub_array[]=$cnt;
			$sub_array[]='<img src="'.base_url(DS.$row->blogImage).'" width="40" height="40">';
			$sub_array[]=$row->blogTitle;
			$sub_array[]=substr($row->blogDescription, 0, 150).'...';

			$edit_option='<a href="'.base_url('myadmin/'.$this->router->fetch_class().'/edit/'.$row->blogID).'" title="Click here for Edit"><i class="fa fa-edit"  style="font-size: 25px;"></i></a>';
			$sub_array[]=$edit_option.'&nbsp;&nbsp;<a href="'.base_url('myadmin/'.$this->router->fetch_class().'/view/'.$row->blogID).'" title="Click here for View"><i class="fa fa-eye"  style="font-size: 25px;"></i></a>';
			$data[]=$sub_array;
			$cnt++;
		}
		$result['data']=$data;
		echo json_encode($result);exit();
	}

	public function getData($status){
		if($status==2){
			$status=0;
		}
		$rows=$this->master_model->getRecords($this->OOZPGINFO["TBL"],array(''.$this->OOZPGINFO["TBL"].'.status'=>$status),''.$this->OOZPGINFO["TBL"].'.*',array('xOrder'=>'ASC'));
		echo json_encode(array('data'=>$rows));exit;
	}

	public function trash(){
		$data['success']=$data['error']='';
		if(isset($_POST['multiple_delete'])){
			if(isset($_POST['checkbox_del'])){
				if(count($_POST['checkbox_del'])!=0){
					$stat=1;
					$cnt_checkbox_del=count($_POST['checkbox_del']);
					for($i=0;$i<$cnt_checkbox_del;$i++){
						$this->master_model->deleteRecord($this->OOZPGINFO["TBL"],$this->OOZPGINFO['PK'],$_POST['checkbox_del'][$i]);
					}
					$this->session->set_flashdata('success','Record(s) delete Successfully.');
					redirect(base_url().$this->uri->uri_string());
				}else{
					$this->session->set_flashdata('error','Select Record(s) to delete.');
					redirect(base_url().$this->uri->uri_string());
				}
			}else{
				$this->session->set_flashdata('error','Select Record(s) to delete.');
				redirect(base_url().$this->uri->uri_string());
			}
		}
		if(isset($_POST['multiple_restore'])){
			if(isset($_POST['checkbox_del'])){
				if(count($_POST['checkbox_del'])!=0){
					$stat=1;
					$cnt_checkbox_del=count($_POST['checkbox_del']);
					for($i=0;$i<$cnt_checkbox_del;$i++){
						$this->master_model->updateRecord($this->OOZPGINFO["TBL"],array('status'=>$stat),array($this->OOZPGINFO['PK']=>$_POST['checkbox_del'][$i]));
					}
					$this->session->set_flashdata('success','Record(s) restore Successfully.');
					redirect(base_url().$this->uri->uri_string());
				}else{
					$this->session->set_flashdata('error','Select Record(s) to restore.');
					redirect(base_url().$this->uri->uri_string());
				}
			}else{
				$this->session->set_flashdata('error','Select Record(s) to restore.');
				redirect(base_url().$this->uri->uri_string());
			}
		}
		$data['middle_content']=$this->router->fetch_class().'-listview';
		$this->load->view('admin/common-file',$data);
	}

	public function add(){
		$data['success']=$data['error']='';
		$data['fetchValue']=array();
		$data['D'][0]["menuType"]=1;
		$image_path = 'uploads/'.$this->folder_name;
		if(isset($_POST)&&!empty($_POST)){
			if(!is_dir($image_path)){
				mkdir('./'.$image_path,0777,TRUE);
		}
		$config=array('upload_path'=>$image_path.DS,'allowed_types'=>'jpg|jpeg|gif|png','file_name'=>rand(100000,999999),'max_size'=>0);
			$this->upload->initialize($config);
			if($_FILES['blogImage']['name']!=''){
				if($this->upload->do_upload('blogImage')){
					$dt=$this->upload->data();
					$_POST['blogImage']=$dt['file_name'];
				}else{
					$_POST['blogImage']=$image_path.'/'.$_POST['old_blogImage'];
					$data['error']=$this->upload->display_errors();
				}
			}

		    if($_FILES['blogDetailImage1']['name']!=''){
				if($this->upload->do_upload('blogDetailImage1')){
					$dt=$this->upload->data();
					$_POST['blogDetailImage1']=$image_path.'/'.$dt['file_name'];
				}else{
					$_POST['blogDetailImage1']=$_POST['old_blogDetailImage1'];
					$data['error']=$this->upload->display_errors();
				}
			}

			/*if($_FILES['blogDetailImage2']['name']!=''){
				if($this->upload->do_upload('blogDetailImage2')){
					$dt=$this->upload->data();
					$_POST['blogDetailImage2']=$dt['file_name'];
				}else{
					$_POST['blogDetailImage2']=$_POST['old_blogDetailImage2'];
					$data['error']=$this->upload->display_errors();
				}
			}*/

			$_POST['blogTitle']=strip_tags($_POST['blogTitle']);
			$tag_url=str_replace(' ', '-', $_POST['blogTitle']);
			$tag_url=preg_replace('/[^A-Za-z0-9\-]/', '', $tag_url);
			$_POST['blogTag']=$tag_url;
			$_POST["status"]=1;
			$_POST["dateAdded"]=DB_DATETIME_FORMAT;
			$_POST["dateModified"]=DB_DATETIME_FORMAT;
			$insertID=$this->master_model->insertRecord($this->OOZPGINFO["TBL"],$_POST,TRUE);
			$this->session->set_flashdata('success','Records Added successfully');
			if($this->router->method=='add'){
				redirect(base_url().'myadmin/'.$this->router->fetch_class().'/edit/'.$insertID);
			}else{
				redirect(base_url().'myadmin/'.$this->router->fetch_class().'/add');
			}
		}
		$data['middle_content']=$this->router->fetch_class().'-'.$this->router->fetch_method();
		$this->load->view('admin/common-file',$data);
	}

	public function edit($id){
		$data['success']=$data['error']='';
		$data['fetchValue']=$this->master_model->getRecords($this->OOZPGINFO["TBL"],array(''.$this->OOZPGINFO["TBL"].'.'.$this->OOZPGINFO['PK']=>$id));
		$image_path = 'uploads/'.$this->folder_name;
		if(isset($_POST)&&!empty($_POST)){
			if(!is_dir($image_path)){
				mkdir('./'.$image_path,0777,TRUE);
			}
			$config=array('upload_path'=>$image_path.DS,'allowed_types'=>'jpg|jpeg|gif|png','file_name'=>rand(100000,999999),'max_size'=>0);
			$this->upload->initialize($config);
			if($_FILES['blogImage']['name']!=''){
				if($this->upload->do_upload('blogImage')){
					$dt=$this->upload->data();
					$_POST['blogImage']=$image_path.'/'.$dt['file_name'];
				}else{

					$_POST['blogImage']=$_POST['old_blogImage'];
					$data['error']=$this->upload->display_errors();
				}
			}
			if($_FILES['blogDetailImage1']['name']!=''){
				if($this->upload->do_upload('blogDetailImage1')){
					$dt=$this->upload->data();
					$_POST['blogDetailImage1']=$image_path.'/'.$dt['file_name'];
				}else{
					$_POST['blogDetailImage1']=$_POST['old_blogDetailImage1'];
					$data['error']=$this->upload->display_errors();
				}
			}

			/*if($_FILES['blogDetailImage2']['name']!=''){
				if($this->upload->do_upload('blogDetailImage2')){
					$dt=$this->upload->data();
					$_POST['blogDetailImage2']=$dt['file_name'];
				}else{
					$_POST['blogDetailImage2']=$_POST['old_blogDetailImage2'];
					$data['error']=$this->upload->display_errors();
				}
			}*/

			$_POST['blogTitle']=strip_tags($_POST['blogTitle']);
			$tag_url=str_replace(' ', '-', $_POST['blogTitle']);
			$tag_url=preg_replace('/[^A-Za-z0-9\-]/', '', $tag_url);
			$_POST['blogTag']=$tag_url;
			$_POST["dateModified"]=DB_DATETIME_FORMAT;
			$this->master_model->updateRecord($this->OOZPGINFO["TBL"],$_POST,array($this->OOZPGINFO['PK']=>$id));
			$this->session->set_flashdata('success','Records Updated successfully');
			redirect(base_url().'myadmin/'.$this->router->fetch_class().'/edit/'.$id);
		}
		$data['middle_content']=$this->router->fetch_class().'-add';
		$this->load->view('admin/common-file',$data);
	}

	public function view($id){
		$data['success']=$data['error']='';
		$data['fetchValue']=$this->master_model->getRecords($this->OOZPGINFO["TBL"],array(''.$this->OOZPGINFO["TBL"].'.'.$this->OOZPGINFO['PK']=>$id));
		$data['adminRole']=$this->master_model->getRecords('admin_role');
		$data['folderName']=$this->folder_name.'/';
		$data['middle_content']=$this->router->fetch_class().'-add';
		$this->load->view('admin/common-file',$data);
	}
}
