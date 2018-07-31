<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['logout'] = 'home/logout';
$route['users'] = 'auth';
$route['groups/create'] = 'auth/create_group';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
