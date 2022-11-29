<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['translate_uri_dashes'] = FALSE;
$route['404_override']       = 'home/error_page';
$route['default_controller'] = 'home';


/*
 * ADMIN PANEL ISLEMLERI
 */


	//Giriş İşlemleri
	$route["login"]                         = "userop/login";
	$route["logout"]                        = "userop/logout";
	$route["reset/password"]                = "userop/forget_password";
	$route["reset/send-mail"]               = "userop/reset_password";


	//Ekibimiz Bölümü
	$route["teams"]                         = "teams/index";
	$route["teams/add"]                     = "teams/new_form";
	$route["teams/save"]                    = "teams/save";
	$route["teams/delete/(:any)"]           = "teams/delete/$1";
	$route["teams/update_form/(:any)"]      = "teams/update_form/$1";
	
	
	//Blog Bölümü
	$route["blogs"]                         = "blogs/index";
	$route["blogs/rankSetter"]              = "blogs/rankSetter";
	$route["blogs/isActiveSetter/(:any)"]   = "blogs/isActiveSetter/$1";
	
	
	//Settings & E-Mail Bölümü
	$route["settings/email"]                = "email/index";
	$route["settings/email/new_form"]       = "email/new_form";
	$route["settings/email/save"]           = "email/save";
	$route["settings/email/delete/(:any)"]  = "email/delete/$1";
	