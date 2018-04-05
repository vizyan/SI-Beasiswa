<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/view';

$route['404_override'] = 'page_404';

//Home
$route['home'] = 'home/view';
$route['home/(:any)'] = 'home/view/$1';
$route['login/(:any)'] = 'home/login/$1';
$route['register'] = 'home/register';
$route['update/(:any)'] = 'home/update/$1';
$route['download/(:any)/(:any)'] = 'home/download/$1/$2';
$route['logout'] = 'home/logout';

//View Dashboard User
$route['dashboard'] = 'dashboard/view';
$route['dashboard/(:any)/(:any)'] = 'dashboard/view/$1/$2';
$route['profile/(:any)/(:any)'] = 'dashboard/profile/$1/$2';
$route['schoolarship/(:any)/(:any)'] = 'dashboard/schoolarship/$1/$2';

//View Dashboard Admin
$route['provider/detail/(:any)'] = 'admin/view/$1';
$route['admin/verif/(:any)'] = 'admin/verif/$1';
$route['admin/unverif/(:any)'] = 'admin/unverif/$1';
$route['download'] = 'admin/download';
$route['schoolarship'] = 'admin/schoolarship';
$route['admin/add'] = 'admin/add';

//View Dashboard Provider
$route['take/(:any)/(:any)'] = 'provider/schoolarship/$1/$2';

$route['translate_uri_dashes'] = FALSE;
