<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Remove the default route set by the module extensions
|--------------------------------------------------------------------------
|
| Normally by default this route is accepted:
|
| module/controller/method
|
| If you do not want to allow access via that route you should add:
|
| $route['module'] = "";
| $route['module/(:any)'] = "";
|
*/

//$route['report/(:any)'] = "";
/*
|--------------------------------------------------------------------------
| Routes to accept
|--------------------------------------------------------------------------
|
| Map all of your valid module routes here such as:
|
| $route['your/custom/route'] = "controller/method";
|
*/

/*--- akbar ROUTE --- */

/* Home */
$route['akbar'] = "akbar_admin/akbar";
$route['akbar/logout'] = "akbar_admin/akbar/logout";
$route['akbar_adm_home'] = "akbar_admin/akbar_adm_home";
$route['akbar_adm_home/register'] = "akbar_admin/akbar_adm_home/register";
$route['akbar_adm_home/do_login'] = "akbar_admin/akbar_adm_home/do_login";
$route['akbar_adm_home/do_register'] = "akbar_admin/akbar_adm_home/do_register";
$route['akbar_adm_home/logout'] = "akbar_admin/akbar_adm_home/logout";

$route['akbar_adm_dua'] = "akbar_admin/akbar_adm_dua";



// Original version would have to have yourmodule at the start of the route for the routes.php to be read
/* Home */
$route['akbar_home/akbar_home'] = "akbar_admin/akbar_home";
