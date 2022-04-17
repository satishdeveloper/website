<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	http://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There area two reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router what URI segments to use if those provided

| in the URL cannot be matched to a valid route.

|

*/

$route[''] = "home/index";
$route['aboutus'] = "home/aboutus";
$route['patient-guide'] = "home/patient_guide";
$route['testimonials'] = "home/testimonials";
$route['contactus'] = "home/contactus";
$route['patient-stories'] = "home/patient_stories";
$route['services'] = "home/services";
$route['service-detail/(:any)'] = "servicedetail/index/$1";
$route['speciality-detail/(:any)'] = "specialitydetail/index/$1";
$route['blog-detail/(:any)'] = "blogdetail/index/$1";
$route['our-team'] = "home/our_team";
$route['blogs'] = "home/blogs";
$route['appointment'] = "home/appointment";
$route['myadmin']="myadmin/admin/login/";
$route['myadmin/dashboard/listview']="myadmin/admin/dashboard/";
$route['myadmin/setting/edit']="myadmin/admin/setting/";
$route['myadmin/profile/edit/(:num)/(:any)']="myadmin/admin/profile/$1/$2/";

// Code By Gaurav 

//$route['videos'] = "home/videos";

$route['shows'] = "home/shows";

$route['search'] = "home/search";

$route['default_controller'] = "home";

$route['404_override'] = 'my404';

$route['ecommerce-web-app-development'] = "home/ecommerce";




/* End of file routes.php */

/* Location: ./application/config/routes.php */

