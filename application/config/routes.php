<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'task1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* pelatihan */
$route['course/(:num)/(:num)/(:num)/(:any)/(:num)'] = 'course/index/$1/$2/$3/$4/$5';
$route['course/(:num)/(:num)/(:num)/(:any)'] = 'course/index/$1/$2/$3/$4';

/* berita */
$route['berita/(:num)/(:num)/(:any)/(:num)'] = 'berita/index/$1/$2/$3/$4';
$route['berita/(:num)/(:num)/(:any)'] = 'berita/index/$1/$2/$3';
