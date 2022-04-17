<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class Service_utilities extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->library('upload');
		$this->load->model('master_model');
		$this->OOZPGINFO["TBL"]='service_utilities';
		$this->OOZPGINFO['PK']='SUID';
		$this->folder_name='service_utilities';
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

public function fetchdata(){$sSearch=$this->input->post('search');$table_name=$this->OOZPGINFO['TBL'];
        $select=''.$this->OOZPGINFO['TBL'].'.SID,'.$this->OOZPGINFO['TBL'].'.SUID,'.$this->OOZPGINFO['TBL'].'.title,
		rj_services.name, 
		'.$this->OOZPGINFO['TBL'].'.description';
		$where_like="(name LIKE '%".$sSearch['value']."%' or title LIKE '%".$sSearch['value']."%')";
		$currentURL=$_SERVER['HTTP_REFERER'];
		$trash='trash';
		if(strpos($currentURL,$trash)!==false){
			$where=''.$this->OOZPGINFO['TBL'].'.status = 0';
		}else{
			$where=''.$this->OOZPGINFO['TBL'].'.status = 1';
		}
		$join[0]['table'] = 'rj_services';
        $join[0]['join_table_id'] = 'rj_service_utilities.SID';
        $join[0]['from_table_id'] = 'rj_services.SID';
        $join[0]['join_type'] = 'left';
		$result=$this->master_model->fetch_data($this->OOZPGINFO["TBL"],$select,$join,$where_like,$where,FALSE,false,false,false);
		$data=array();
		$cnt=1;
		foreach($result['data']as $key=>$row){
			$sub_array=array();
			$sub_array[]='<input type="checkbox" id="checkbox_del[]" name="checkbox_del[]" class="flat" value="'.$row->SUID.'">';
			$sub_array[]=$cnt;
			$sub_array[]=$row->name;
			$sub_array[]=$row->title;
			$sub_array[]=$row->description;

			$edit_option='<a href="'.base_url('myadmin/'.$this->router->fetch_class().'/edit/'.$row->SUID).'" title="Click here for Edit"><i class="fa fa-edit"  style="font-size: 25px;"></i></a>';
			$sub_array[]=$edit_option.'&nbsp;&nbsp;<a href="'.base_url('myadmin/'.$this->router->fetch_class().'/view/'.$row->SUID).'" title="Click here for View"><i class="fa fa-eye"  style="font-size: 25px;"></i></a>';
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
		$data['services']=$this->master_model->getRecords('services',array('status'=>'1'));
		if(isset($_POST)&&!empty($_POST)){
		    $_POST['title']=strip_tags($_POST['title']);
		    $_POST['SID']=strip_tags($_POST['SID']);
		    $_POST['description']=$_POST['description'];
			$_POST["status"]=1;
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
		$data['services']=$this->master_model->getRecords('services',array('status'=>'1'));
		if(isset($_POST)&&!empty($_POST)){
		$_POST['SID']=strip_tags($_POST['SID']);
		    $_POST['title']=strip_tags($_POST['title']);
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
		
		$data['middle_content']=$this->router->fetch_class().'-add';
		$this->load->view('admin/common-file',$data);
	}
}
