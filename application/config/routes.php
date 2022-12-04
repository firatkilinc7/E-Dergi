<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['translate_uri_dashes'] = FALSE;
$route['404_override']       = 'home/error_page';
$route['default_controller'] = 'home';


/*
 * ADMIN PANEL ISLEMLERI
 */


	//User İşlemleri
	$route["login"]                         = "userop/login";
	$route["logout"]                        = "userop/logout";
	$route["reset/password"]                = "userop/forget_password";
	$route["reset/send-mail"]               = "userop/reset_password";
	$route["register"]                      = "userop/register_form";
	$route["profile"]                       = "users/profile";
	$route["profile/update_form"]           = "users/profile_update_form";
	$route["profile/update/(:any)"]         = "users/profile_update/$1";
	

	//Ekibimiz Bölümü
	$route["teams/add"]                     = "teams/new_form";
	$route["teams/(:any)"]                  = "teams/$1";


	//Blog Bölümü
	$route["blogs/(:any)"]                  = "blogs/$1";


	//Settings & E-Mail Bölümü
	$route["settings/email/(:any)"]         = "email/$1";
	$route["settings/email"]                = "email/index";
	$route["settings/email/delete/(:any)"]  = "email/delete/$1";
	
