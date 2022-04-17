<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*

|--------------------------------------------------------------------------

| File and Directory Modes

|--------------------------------------------------------------------------

|

| These prefs are used when checking and setting modes when working

| with the file system.  The defaults are fine on servers with proper

| security, but you may wish (or even need) to change the values in

| certain environments (Apache running a separate process for each

| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should

| always be used to set the mode correctly.

|

*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*

|--------------------------------------------------------------------------

| File Stream Modes

|--------------------------------------------------------------------------

|

| These modes are used when working with fopen()/popen()

|

*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

$OOZPGINFO  = array();

$OOZACCESS  = array("view","add","edit","delete","trash","restore");

$OOZACTION  = array("view"=>array("view"),"add"=>array("add"), "edit"=>array("edit"), "trash"=>array("view"), "listview"=>array("view"));

$OOZMACTION = array("listview"=>array("trash"), "trash"=>array("restore","delete"));

$OOZPGFILE  = array("view"=>"add-edit", "add"=>"add-edit", "edit"=>"add-edit", "listview"=>"listview", "trash"=>"listview");

$OOZPGMENU  = array("view"=>array("listview","trash"), "add"=>array("listview","trash","display-hide-attributes"), "edit"=>array("add","listview","trash","display-hide-attributes"), "listview"=>array("add","trash"), "trash"=>array("add","listview"));

$OOZADMINROLE = array("100000"=>"Settings","100001"=>"Admin Users","100002"=>"Admin Roles","100003"=>"Admin Menus","100004"=>"Profile","100005"=>"Language","100006"=>"Other Data");

$OOZADMINMENU = array('100000'=> array("adminMenuID"=>'100000', "menuTitle"=>"Settings", "seoUri"=>"setting", "dUri"=>"setting/edit"),

					 '100001'=> array("adminMenuID"=>'100001', "menuTitle"=>"Admin Users", "seoUri"=>"adminUser", "dUri"=>"adminUser/listview"),

					 '100002'=> array("adminMenuID"=>'100002', "menuTitle"=>"Admin Roles", "seoUri"=>"adminRole", "dUri"=>"adminRole/listview"),

					 '100003'=> array("adminMenuID"=>'100003', "menuTitle"=>"Admin Menus", "seoUri"=>"adminMenu", "dUri"=>"adminMenu/listview"),

					 '100004'=> array("adminMenuID"=>'100004', "menuTitle"=>"Profile", "seoUri"=>"profile", "dUri"=>"profile/edit"),

					 '100005'=> array("adminMenuID"=>'100005', "menuTitle"=>"Language", "seoUri"=>"language", "dUri"=>"language/listview"),

					 '100006'=> array("adminMenuID"=>'100006', "menuTitle"=>"Other Data", "seoUri"=>"otherData", "dUri"=>"otherData/edit"));

$OOZARRSUPER = array("user"=>"rushiraj@4fox.co.in","pass"=>"c359ba7c70985727d8fb790b03d51814");//oozyenter oozyadmin 81bcf9036ba9b27c8c4ba34523be4ffa

define('DB_DATETIME_FORMAT',date('Y-m-d H:i:s'));
define('UPLOADS','uploads');
define('DS','/');
define('WEBSITEID','1');
define('TITLE','Spitertech');
define('ADMINTITLE','Sunder Netralaya - Admin');

// end
define('PRODUCT_COLOR','product_color');
define('IMAGECONSTANT','http://'.$_SERVER['SERVER_NAME'].'/dev_discovery/');
/* End of file constants.php */
/* Location: ./application/config/constants.php */
// admin header title



