<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['translate_uri_dashes'] = FALSE;
$route['404_override']       = 'home/error_page';
$route['default_controller'] = 'home';


/*
 * ADMIN PANEL ISLEMLERI
 */


	//User İşlemleri
	$route["login"]                          = "userop/login";
	$route["logout"]                         = "userop/logout";
	$route["reset/password"]                 = "userop/forget_password";
	$route["reset/send-mail"]                = "userop/reset_password";
	$route["register"]                       = "userop/register_form";
	$route["profile"]                        = "users/profile";
	$route["profile/update_form"]            = "users/profile_update_form";
	$route["profile/update/(:any)"]          = "users/profile_update/$1";
	$route["profile/update_password_form"]   = "users/profile_update_password_form/$1";
	$route["profile/update_password/(:any)"] = "users/profile_update_password/$1";
	

	//Ekibimiz Bölümü
	$route["teams/add"]                      = "teams/new_form";
	$route["teams/(:any)"]                   = "teams/$1";


	//Blog Bölümü
	$route["blogs/(:any)"]                   = "blogs/$1";
	$route["blogs/filter/(:any)"]            = "blogs/index/$1";


	//Settings & E-Mail Bölümü
	$route["settings/email/(:any)"]          = "email/$1";
	$route["settings/email"]                 = "email/index";
	$route["settings/email/delete/(:any)"]   = "email/delete/$1";
	
	
	
/*
 * WEBSITE ONYUZ ISLEMLERI
 */
	
	//HAKKIMIZDA
	$route["hakkimizda"]                 = "home/about_us";
	
	//YAZILAR
	$route["yazilar"]          = "home/blogs/";
	$route["yazilar/(:any)"]   = "home/blog_detail/$1";
	
	$route["party-mode/"]   = "home/party_mode";
	$route["party-mode/(:any)"]   = "home/party_mode/$1";
	
	