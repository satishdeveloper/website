<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function beforPageLoad()
{
	$CI =& get_instance();
	if($CI->uri->segment(1)=='myadmin')
	{
		$OOSETTINGS = getSetting();
		/*$CI->OOSETTINGS = $OOSETTINGS;
		$TPL = new manageTemplate();
		$CI->tplFile = $TPL->tplFile    = base_url()."/myadmin";	
		$CI->requestUri = $TPL->requestUri = $_SERVER["REQUEST_URI"];
		$CI->tplDefault = $TPL->tplDefault = $OOSETTINGS["default-page"];
		$CI->tplTitle = $TPL->tplTitle   = "";
		$CI->modName = $TPL->modName    = "";
		$CI->pageType = $TPL->pageType   = "";
		$CI->mAccess = $TPL->mAccess = "";
		$CI->access = $TPL->access = "";
		$TPL->setPage();
		$CI->tplFile = $TPL->tplFile;	
		$CI->requestUri = $TPL->requestUri;
		$CI->tplDefault = $TPL->tplDefault;
		$CI->tplTitle = $TPL->tplTitle;
		$CI->modName = $TPL->modName;
		$CI->pageType = $TPL->pageType;
		$CI->mAccess = $TPL->mAccess;
		$CI->pageUri = $TPL->pageUri;
		$CI->access = $TPL->access;*/
	}
	else
	{
		$OOSETTINGS = getSetting();
		$CI->OOSETTINGS = $OOSETTINGS;
	}
}