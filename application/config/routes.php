<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['fadmin/(:any)/{:any}']     = 'fadmin/$1/$1';
$route['admin'] = 'admin/view';
$route['admin/(:any)'] = 'pageadmin/view/$1';

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)'] = 'pages/view/$1';
