<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['translate_uri_dashes'] = FALSE;

$route['404_override']       = 'home/error_page';
$route['default_controller'] = 'home';

/*
 * ADMIN PANEL ISLEMLERI
 */

//Giriş İşlemleri
$route["login"]     = "userop/login";
$route["logout"]    = "userop/logout";

//Ekibimiz Bölümü
$route["teams"]     = "teams/index";
$route["teams/add"] = "teams/new_form";
$route["teams/save"] = "teams/save";

