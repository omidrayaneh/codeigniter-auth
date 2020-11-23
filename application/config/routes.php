<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

###########			View Route     ########################


$route['login'] = 'home/login';
$route['register'] = 'home/register';
$route['logout'] = 'home/logout';
$route['dashboard/categories'] = 'dashboard/categories';
$route['dashboard/categories/create'] = 'dashboard/create';
$route['dashboard/categories/update/(:any)'] = 'dashboard/update/1$';


###########			User API Route     ########################

####  user login
$route['api/login']= 'api/v1/user/login';
####  user register
$route['api/register']= 'api/v1/user/register';

###########			category API Route     ########################

####  get all categories
$route['api/categories']='api/v1/categories/allCategories';
####  create category
$route['api/categories/create']='api/v1/categories/createCategories';
####  delete category with slug
$route['api/categories/(:any)/delete']='api/v1/categories/deleteCategories/$1';
####  update category with slug
$route['api/categories/update']='api/v1/categories/updateCategories';
