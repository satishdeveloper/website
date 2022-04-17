<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

if(!function_exists('getSetting')){
  function getSetting($seoUri=""){$arr=array();$ci=&get_instance();$ci->load->database();if($seoUri)$ci->db->where('seoUri',$seoUri);$rows=$ci->master_model->getRecords('admin_setting');foreach($rows as $v){$arr[$v["seoUri"]]=$v["settingVal"];}return $arr;}}

if(!function_exists('isAdminUser')){
  function isAdminUser(){$flg=false;$ci=&get_instance();if($ci->session->userdata('OOZID')){
  if($ci->session->userdata('OOZID')=="SUPER"){$flg=true;}else{$sql=$ci->master_model->getRecords('admin_user',array('userID'=>sprintf("%d",$ci->session->userdata('OOZID')),'status'=>'1'));if(count($sql)>0){$flg=true;}}}return $flg;}}

if(!function_exists('loginAdminUser')){
  function loginAdminUser($userEmail="",$userPass=""){global $OOZARRSUPER;$flg=false;$ci=&get_instance();$ci->load->database();if($userEmail&&$userPass){if($userEmail==$OOZARRSUPER["user"]&&md5($userPass)==$OOZARRSUPER["pass"]){$mysqltime=date("H:i:s");$user_data=array('OOZID'=>'SUPER','OOZNAME'=>"SpitertTech",'OOZEMAIL'=>$OOZARRSUPER["user"],'OOZIMAGE'=>"",'OOZROLE'=>"SUPER",'website_id'=>'1','website_name'=>'Bizkey','website_logo'=>base_url('backendAssets/images/menu-logo.jpg'),'timer'=>base64_encode($mysqltime));$ci->session->set_userdata($user_data);$flg=true;}else{$ci->db->select('admin_user.displayName,admin_user.userEmail,admin_user.imageName,admin_user.userID,admin_user.roleAID');$ci->db->join('admin_role','admin_user.roleAID = admin_role.roleAID','LEFT');$rst=$ci->db->get_where('admin_user',array('admin_user.userEmail'=>$userEmail,'admin_user.userPass'=>md5($userPass),'admin_user.status'=>'1','admin_role.status'=>'1'));$sql=$rst->row();if($rst->num_rows()>0){$mysqltime=date("H:i:s");$user_data=array('OOZID'=>$sql->userID,'OOZNAME'=>$sql->displayName,'OOZEMAIL'=>$sql->userEmail,'OOZIMAGE'=>$sql->imageName,'OOZROLE'=>$sql->roleAID,'website_id'=>'1','website_name'=>'SpitertTech','website_logo'=>base_url('backendAssets/images/menu-logo.jpg'),'timer'=>base64_encode($mysqltime));$ci->session->set_userdata($user_data);$ci->db->where(array('userID'=>$sql->userID),NULL,FALSE);$ci->db->update('admin_user',array('dateLogin'=>date("Y-m-d H:i:s")));$flg=true;}}}return $flg;}}

if(!function_exists('loginAdminUser')){
  function getSetting($seoUri=""){$arr=array();$ci=&get_instance();$ci->load->database();$where='1';if($seoUri)$ci->db->where('seoUri',$seoUri);$rows=$ci->master_model->getRecords('admin_setting');foreach($rows as $v){$arr[$v["seoUri"]]=$v["settingVal"];}return $arr;}}

if(!function_exists('getPageNav')){
  function getPageNav($moreNav=""){
      global $OOZPGMENU;
      $str="";
      $ci=&get_instance();
      $ci->load->database();
      $v=$ci->router->method;
  if($ci->router){
      $param = $ci->uri->segment('4');
      if($v=="\tadd" || $v=='trash'){
          if($param != ''){
              $str.='<div class="btn-group"><a href="'.base_url().'myadmin/'.$ci->router->class.'/listview/'.$param.'" class="trash" title="'.ucfirst($v).'"><button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="'.ucfirst($v).'"><i class="fa fa-retweet"></i> Listview</button></a></div>';
          }else{
            $str.='<div class="btn-group"><a href="'.base_url().'myadmin/'.$ci->router->class.'/listview" class="trash" title="'.ucfirst($v).'"><button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="'.ucfirst($v).'"><i class="fa fa-retweet"></i> Listview</button></a></div>';
          }
      }else{
          if($ci->router->class == 'pendingproperties'){
             
          }else{
              if($param != ''){
                if($ci->router->class == 'users'){

                }else{
                  $str.='<div class="btn-group"><a href="'.base_url().'myadmin/'.$ci->router->class.'/add/'.$param.'" class="add" title="'.ucfirst('add').'"><button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="'.ucfirst('add').'"><i class="fa fa-plus"></i> Add</button></a></div>';
                }
                  
                  $str.='<div class="btn-group"><a href="'.base_url().'myadmin/'.$ci->router->class.'/trash/'.$param.'" class="trash" title="'.ucfirst($v).'"><button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="'.ucfirst($v).'"><i class="fa fa-retweet"></i> Trash</button></a></div>';
        
              }else{
                if($ci->router->class == 'users'){

                }else{
                  $str.='<div class="btn-group"><a href="'.base_url().'myadmin/'.$ci->router->class.'/add'.'" class="add" title="'.ucfirst('add').'"><button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="'.ucfirst('add').'"><i class="fa fa-plus"></i> Add</button></a></div>';
                }
                $str.='<div class="btn-group"><a href="'.base_url().'myadmin/'.$ci->router->class.'/trash" class="trash" title="'.ucfirst($v).'"><button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="'.ucfirst($v).'"><i class="fa fa-retweet"></i> Trash</button></a></div>';
              }
          }
          
      }
      
  }
    
    $strPg="";
    $multipleDataStr="";
    $strAct = '';
    if(($ci->router->method=="trash"||$ci->router->method=="listview")){
        if($ci->router->method=="trash"){
           $multipleDataStr.='<div class="btn-group "><button type="submit" name="multiple_restore" id="multiple_restore"  title="'.ucfirst('restore').'" data-toggle="tooltip" data-placement="Right" title="" data-original-title="'.ucfirst('restore').'" class="btn btn-circle btn-fill btn-bordered btn-primary show-tooltip" onclick="javascript : return multiplerestoreconfirm();"><i class="fa fa-exchange"></i></button></div>';
            
        }else{
            $multipleDataStr.='<div class="btn-group "><button type="submit" name="multiple_delete" id="multiple_delete"  title="'.ucfirst('delete').'" data-toggle="tooltip" data-placement="Right" title="" data-original-title="'.ucfirst('delete').'"  class="btn btn-circle btn-fill btn-bordered btn-primary show-tooltip" onclick="javascript : return multipledeletconfirm();"><i class="fa fa-trash-o"></i></button></div>';
            
        }
        $strAct='<div class="btn-toolbar pull-left clearfix">'.$multipleDataStr.'</div>';
        
    }
    return '<div class="btn-toolbar pull-right clearfix">'.$str.'</div>'.$strAct;
      
  }}

if(!function_exists('getMAction')){
  function getMAction($type="",$id=0){global $OOZMACTION;$str="";$ci=&get_instance();$ci->load->database();$arrA=array_intersect($OOZMACTION[$ci->pageType],$ci->access);if($arrA){if($type){if($type=="menu"){foreach($arrA as $a){if($a=='restore'){$str.='<div class="btn-group "><button type="submit" name="multiple_'.$a.'" id="multiple_'.$a.'"  title="'.ucfirst($a).'" data-toggle="tooltip" data-placement="Right" title="" data-original-title="'.ucfirst($a).'" class="btn btn-circle btn-fill btn-bordered btn-primary show-tooltip" onclick="javascript : return multiplerestoreconfirm();"><i class="fa fa-exchange"></i></button></div>';}else{$str.='<div class="btn-group "><button type="submit" name="multiple_delete" id="multiple_delete"  title="'.ucfirst($a).'" data-toggle="tooltip" data-placement="Right" title="" data-original-title="'.ucfirst($a).'"  class="btn btn-circle btn-fill btn-bordered btn-primary show-tooltip" onclick="javascript : return multipledeletconfirm();"><i class="fa fa-trash-o"></i></button></div>';}}}}}return $str;}}

if(!function_exists('getEditUrl')){
  function getEditUrl($id){global $OOZPGINFO;$str="";$strE="";$ci=&get_instance();$ci->load->database();if($id){if(in_array("edit",$ci->mAccess[$ci->modName])){$strE='<a href="'.base_url().'myadmin/'.$ci->modName.'/edit/'.$id.'"  title="Click here for Edit" ><i class="fa fa-edit"  style="font-size: 18px;"></i></a>';}$str=$strE.'<a href="'.base_url().'myadmin/'.$ci->modName.'/view/'.$id.'"  title="Click here for View" ><i class="fa fa-eye"  style="font-size: 18px;"></a>';}return $str;}}

if(!function_exists('resetAutoIncreament')){
  function resetAutoIncreament($tbl="",$pk=""){$ci=&get_instance();$ci->load->database();if($tbl&&$pk){$maxVal='1';$rows=$ci->master_model->getRecords($tbl,'','MAX('.$pk.') AS maxVal');if($rows[0]["maxVal"]){$maxVal=($rows[0]["maxVal"]+1);}$ci->db->query("ALTER TABLE ".$tbl." AUTO_INCREMENT = ".$maxVal."");}}}

if(!function_exists('getOtherData')){
  function getOtherData($key){$ci=&get_instance();$ci->load->database();$str="";if($key){$D=$rows=$ci->master_model->getRecords('otherdata',array('data_key'=>$key),'data_value');if(count($D)>0)$str=$D[0]['data_value'];}return $str;}}

if(!function_exists('getDataArray')){
  function getDataArray($tableName="",$fieldKey="",$fieldValue="",$where="1",$orderby=""){
    $ci=&get_instance();
    $ci->load->database();
    $arrData=array();
    if($tableName&&$fieldKey&&$fieldValue){
      if(!$orderby){
        $orderby=$fieldValue;
      }
      $rows=$ci->db->query("SELECT `$fieldKey`,`$fieldValue` FROM `$tableName` WHERE ".$where." ORDER BY $orderby");
      if(count($rows->result_array())>0){
        foreach($rows->result_array()as $v){
          $arrData[$v[$fieldKey]]=$v[$fieldValue];
        }
      }
    }
    return $arrData;

  }
}

if(!function_exists('getModTree')){
  function getModTree($path="",$selected=""){$str="";if($path){foreach(glob($path.'*'.EXT)as $controller){$controller=basename($controller,EXT);$route[]=$controller;}$functionFinder='/function[\s\n]+(\S+)[\s\n]*\(/';$functionArray=array();$functionArrayMy=array();foreach($route as $filename){$fileContents=file_get_contents($path.$filename.'.php');preg_match_all($functionFinder,$fileContents,$functionArray);if(count($functionArray)>1){$functionArray=$functionArray[1];$functionArrayMy[$filename]=$functionArray;}}$arr=$functionArrayMy;if($arr){foreach($arr as $key=>$value){foreach($value as $func){if($key.'/'.$func!='page/content'&&$key.'/'.$func!='page/category'){$chk="";if($key.'/'.$func=="$selected")$chk=' checked="checked"';$str.='<li><div class="radio"><input type="radio" name="seoUri" id="'.$key.'/'.$func.'" value="'.$key.'/'.$func.'"'.$chk.' /> <label for="'.$key.'/'.$func.'">'.$key.'/'.$func.'</label></div></li>';}}}}}return $str;}}

if(!function_exists('createMenu')){
  function createMenu($menuID=0,$depth=100,$level=0){$ci=&get_instance();$ci->load->database();if($menuID){$sql=$ci->master_model->getRecords('menu',array('status'=>'1','parentID'=>$menuID),'',array('xOrder'=>'ASC'));if(count($sql)>0){if($level)$str.='<ul class="tree-list">';foreach($sql as $v){$class='';$target='';$url='';$myClass='';if($v["seoUri"])if(strpos($ci->router->fetch_method(),$v["seoUri"])!==false){$class=' class="active"';$myClass=' active';}if($v["menuType"]=='module'){if($ci->router->fetch_class()==$v["seoUri"]){$class=' class="active"';$myClass=' active';}}else{if($ci->uri->segment(2)==$v["seoUri"]){$class=' class="active"';$myClass=' active';}}if($v["menuType"]=='exlink'){$url=$v["seoUri"];$target=' target="_blank"';}else if($v["menuType"]=='page'){$url=base_url()."page/content/".$v["seoUri"]."/";}else if($v["menuType"]=='category'){$url=base_url()."page/category/".$v["seoUri"]."/";}else{$url=base_url().$v["seoUri"]."/";}$str.='<li class="'.$v["menuClass"].$myClass.'"><a'.$class.' href="'.$url.'" '.$target.'>'.$v["menuTitle"].'</a>';$str.=createMenu($v["menuID"],$depth,$level+1);$level-1;$str.='</li>';}if($level)$str.='</ul>';}}return $str;}}

if(!function_exists('getMenu')){
  function getMenu($menuTitle="",$depth=100){$str="";$ci=&get_instance();$ci->load->database();if($menuTitle){$d=$ci->master_model->getRecords('menu',array('status'=>'1','menuTitle'=>$menuTitle),'menuID');if(count($d)>0){$str=createMenu($d[0]["menuID"],$depth);}}return $str;}}

if(!function_exists('fxGetMeta')){
  function fxGetMeta(){$str="";$MetaTag='';$ogTag='';$RespectiveURL='';$CI=&get_instance();$controllerName=$CI->uri->segment(1);$methodName=$CI->uri->segment(2);$argument=$CI->uri->segment(3);$CI->load->database();if($controllerName!=''&&$methodName!=''&&$controllerName=='servicedetail'){if($controllerName=='servicedetail'){$d=$CI->master_model->getRecords('services',array('status'=>'1','isOnHomePage'=>'0','serviceTag'=>$methodName));$RespectiveURL=base_url().$controllerName.'/'.$methodName;}}else if($controllerName!=''&&$methodName!=''&&$controllerName=='workdetail'){if($controllerName=='workdetail'){$d=$CI->master_model->getRecords('works',array('status'=>'1','workTag'=>$methodName));$RespectiveURL=base_url().$controllerName.'/'.$methodName;}}else if($controllerName!=''&&$methodName!=''&&$controllerName=='blogdetail'){if($controllerName=='blogdetail'){$d=$CI->master_model->getRecords('blog',array('status'=>'1','blogTag'=>$methodName));$RespectiveURL=base_url().$controllerName.'/'.$methodName;}}else if($controllerName=='about'){$d=$CI->master_model->getRecords('about',array('status'=>'1'));$RespectiveURL=base_url().$controllerName;}else if($controllerName=='contact'){$d=$CI->master_model->getRecords('contact',array('status'=>'1'));$RespectiveURL=base_url().$controllerName;}else if($controllerName=='client'){$d[0]['metaTitle']='Bizkey';$d[0]['metaKeyword']='';$d[0]['metaDesc']='Bizkey';$RespectiveURL=base_url().$controllerName;}else{if($controllerName==''){$controllerName='home';}else if($controllerName=='work'){$controllerName='work';}else if($controllerName=='client'){$controllerName='client';}$d=$CI->master_model->getRecords('page',array('status'=>'1','seoUri'=>$controllerName));$RespectiveURL=base_url().$controllerName;}$str='<title>'.$d[0]['metaTitle'].'</title>';$str.='<meta name="TITLE" content="'.$d[0]['metaTitle'].'">';$str.='<meta name="KEYWORDS" content="'.$d[0]['metaKeyword'].'">';$str.='<meta name="DESCRIPTION" content="'.$d[0]['metaDesc'].'">';$ogTag='<meta property="og:url" content="'.$RespectiveURL.'" />
          <meta property="og:type" content="website" />
          <meta property="og:title" content="'.$d[0]['metaTitle'].'" />
          <meta property="og:description" content="'.$d[0]['metaDesc'].'" />
                  <meta property="og:image"  content="'.base_url('frontendAssets/images/Chimp-logo_white.png').'"/>';$canonicalTag='<link rel="canonical" href="'.$RespectiveURL.'" />';$MetaTag=$str.$ogTag.$canonicalTag;return $MetaTag;}}

if(!function_exists('getSlider')){
  function getSlider(){
    $ci=&get_instance();
    $ci->load->database();
    $arrData=array();
    
      
      $rows=$ci->db->query("SELECT * FROM `rj_slider` WHERE status = 1");
      if(count($rows->result_array())>0){
        return $rows->result_array();
      }
    
    return FALSE;

  }
}

if(!function_exists('getCommentCount')){
  function getCommentCount($id){
    $ci=&get_instance();
    $ci->load->database();
    $arrData=array();
    
      
      $rows=$ci->db->query("SELECT rj_comments.* FROM `rj_comments` WHERE rj_comments.blogID = ".$id);
      if(count($rows->result_array())>0){
        return count($rows->result_array());
      }
    
    return 0;

  }
}

if(!function_exists('')){
  function getSpecialities(){
    $ci=&get_instance();
    $ci->load->database();
    $arrData=array();
    
      
      $rows=$ci->db->query("SELECT rj_specialities.* FROM `rj_specialities` WHERE rj_specialities.status = 1");
      if(count($rows->result_array())>0){
        return ($rows->result_array());
      }
    
    return 0;

  }
}

if(!function_exists('getServices')){
  function getServices(){
    $ci=&get_instance();
    $ci->load->database();
    $arrData=array();
    
      
      $rows=$ci->db->query("SELECT rj_services.* FROM `rj_services` WHERE rj_services.status = 1");
      if(count($rows->result_array())>0){
        return $rows->result_array();
      }
    
    return false;

  }
}
