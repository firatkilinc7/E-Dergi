<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['translate_uri_dashes'] = FALSE;

$route['404_override']       = 'home/error_page';
$route['default_controller'] = 'home';


//admin panel işlemleri
$route["login"] = "userop/login";
$route["logout"]          = "userop/logout";
$route["teams"] = "teams/index";

