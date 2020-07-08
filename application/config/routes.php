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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'Home';
$route['sitemap.xml'] = 'Sitemap';
$route['404_override'] = 'Error404';

$route['forgot-password'] = 'Login/forgot';
$route['sign-up'] = 'Login/register';
$route['registered'] = 'Login/regSuccess';
$route['registration-error'] = 'Login/regError';
$route['logout'] = 'Login/logout';
$route['profile'] = 'Home/profile';
$route['manage-kart'] = 'Home/manageKart';
$route['demand-lists'] = 'Home/demandLists';
$route['demand-form'] = 'Home/demandForm';
$route['orders'] = 'Home/orders';
$route['payments'] = 'Home/payments';
$route['update-stock'] = 'Edit/updateStock';

$route['admin'] = 'Admin';
$route['logout-admin'] = 'AdminLogin/logout';
$route['admin-profile'] = 'Admin/profile';

$route['items-master'] = 'Admin/itemsMaster';
$route['add-item'] = 'Admin/addItem';
$route['edit-item/(:num)'] = 'Admin/editItem/$1';
$route['toggle-item-status/(:num)/(:num)'] = 'EditAdm/itemStatus/$1/$2';
$route['delete-item/(:num)'] = 'DeleteAdm/item/$1';

$route['locations-master'] = 'Admin/locationsMaster';
$route['add-loc'] = 'Admin/addLoc';
$route['edit-loc/(:num)'] = 'Admin/editLoc/$1';
$route['toggle-loc-status/(:num)/(:num)'] = 'EditAdm/locStatus/$1/$2';
$route['delete-loc/(:num)'] = 'DeleteAdm/location/$1';

$route['karts'] = 'Admin/kartUsers';
$route['toggle-kart-status/(:num)/(:num)'] = 'EditAdm/kartStatus/$1/$2';
$route['delete-kart/(:num)'] = 'DeleteAdm/kart/$1';

$route['kart-orders'] = 'Admin/kartOrders';
$route['kart-payments'] = 'Admin/kartPayments';