<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ManageTemplate {
	var $tplInc     = "";
	var $tplFile    = "";
	var $pageUri    = "";
	var $requestUri = "";
	var $tplDefault = "";
	var $tplTitle   = "";
	var $modName    = "";
	var $pageType   = "";
	var $access     = array();
	var $mAcces     = array();
	var $pageUrl    = "";
	var $params     = "";

	public function getAccess($roleAID="") {
		$ci=& get_instance();
		$ci->load->database();
		$ci->load->model('master_model');
		$arr = array(); global $OOZADMINMENU;
		if($roleAID == "SUPER"){
			global $OOZACCESS;

			foreach($OOZADMINMENU as $v){
				if($this->modName == $v["seoUri"])
					$this->tplTitle = ucfirst($this->pageType)." ".$v["menuTitle"];
				$this->mAccess[$v["seoUri"]] = $OOZACCESS;

			}

			$A = $ci->master_model->getRecords('admin_menu',array('status'=>'1'),'seoUri,menuTitle',array('xOrder'=>'ASC'));
			if(count($A) > 0) {
				foreach($A as $m){
					$this->mAccess[$m["seoUri"]] = $OOZACCESS;
					if($m["seoUri"] == $this->modName)
						$this->tplTitle = ucfirst($this->pageType)." ".$m["menuTitle"];
				}
				$this->mAccess['admin']=array('view','add','edit');
				$arr = $this->mAccess[$this->modName];
			}
		} else {
			$arr=array();
			if(intval($roleAID)) {
				$ci->db->join('admin_menu','admin_menu.adminMenuID=admin_user_access.adminMenuID AND '.$ci->db->dbprefix("admin_menu").'.status = 1','LEFT');
				$A = $ci->master_model->getRecords('admin_user_access',array('admin_user_access.roleAID'=>sprintf("%d",$roleAID)),'admin_user_access.adminMenuID,admin_user_access.accessType,admin_menu.seoUri,admin_menu.menuTitle',array($ci->db->dbprefix("admin_menu").'.xOrder'=>'ASC'));

				if(count($A) > 0) {
					foreach($A as $m){

						if(array_key_exists($m["adminMenuID"],$OOZADMINMENU)){
							$m["seoUri"] = $OOZADMINMENU[$m["adminMenuID"]]["seoUri"];
							$m["menuTitle"] = $OOZADMINMENU[$m["adminMenuID"]]["menuTitle"];
						}

						$this->mAccess[$m["seoUri"]] = json_decode($m["accessType"]);
						
						if($m["seoUri"] == $this->modName)
							$this->tplTitle = ucfirst($this->pageType)." ".$m["menuTitle"];
					}
					$this->mAccess['admin']=array('view','add','edit');

					if($this->mAccess[$this->modName])
					$arr = $this->mAccess[$this->modName];
				}
			}
		}
		return $arr;
	}

	private function setFiles(){
		$ci=& get_instance();
		global $OOZPGFILE,$OOZACTION; $fileName = ""; $this->tplFile = 'show_404()'; $this->tplTitle = "404 : Page not found";

		$this->access = $this->getAccess($ci->session->userdata('OOZROLE'));
        
       // $this->access[] = 'fetchdata';
        //echo "<pre>";print_r($this->access);exit;
		if($OOZACTION[$this->pageType])
		{
			if(!in_array($OOZACTION[$this->pageType][0],$this->access)) {//
				show_404();
			}
		}
		
		if($this->access) {

			if(in_array("view",$this->access)) {
				$arrC = array_intersect($OOZACTION[$this->pageType],$this->access);
			
				if($arrC)
					$fileName = $this->modName."/".$OOZPGFILE[$this->pageType];
					//	echo "<pre>";print_r($fileName);exit;
			}
		}
		else
		{
			show_404();
		}

		if($fileName){
			$mUrl = APPPATH."controllers/myadmin/".$ci->router->fetch_class().".php";

			if(file_exists($mUrl) && is_file($mUrl)) {

				$this->tplFile = $mUrl;
				$this->tplInc  = $mUrl;
			} else {
				show_404();
			}
			$this->pageUrl = base_url()."/".$this->pageUri."/";
		}

	}

	public function setPage(){
		$ci=& get_instance();
		global $FOLDER;
		if($_SERVER["QUERY_STRING"])
		$this->params = "&".$_SERVER["QUERY_STRING"];
		$this->requestUri = str_replace($FOLDER."/LMS/","",$this->requestUri);
		$arrU = parse_url($this->requestUri);
		$this->pageUri = basename($arrU["path"]);

		if(isAdminUser()){
			if(!$this->pageUri || $this->pageUri=="myadmin") { redirect(base_url()."$this->tplDefault/");exit;}
			$this->pageType = $ci->uri->segment(3);
			$this->modName  = $ci->uri->segment(2);
			$this->setFiles();
		} else if($ci->router->fetch_method()!= "login") {
			header("location:".base_url()."myadmin/?redirect=".urlencode($this->requestUri)); exit;
		}
	}
}
