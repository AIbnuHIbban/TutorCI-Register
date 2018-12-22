<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Logout
$route['logout'] = 'welcome/logout';
// Kehalaman Admin
$route['admin'] = 'welcome/admin';
// Proses Login
$route['login'] = 'welcome/login';

$route['daftar'] = 'welcome/keHalamanDaftar';
$route['prosesdaftar'] = 'welcome/prosesdaftar';



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
