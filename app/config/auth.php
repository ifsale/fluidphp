<?php

	/*
	| ---------------------------------------------------
	| Authentication Cofiguration File
	| ----------------------------------------------------------
	|
	| This files controls the authentication options for the framework
	| Read the manual at http://phptoolcase.com to learn about the options
	|
	*/

	return array
	(
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'app_key'				=>	'your_private_key' ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'connection_name'		=>	'default' ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'connection_manager'	=>	'DB' ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'model'				=>	null ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'event_class'			=>	'PtcEvent' ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'users_table'			=>	'users' ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'login_table'			=>	'logged_in_users' ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'verify'				=>	false ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'check_active'			=>	false ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'check_admin'			=>	false ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'use_dates'			=>	false ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'cookie_prefix'			=>	'$x$' ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'keep_sessions'		=>	30 , // in days
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'debug_category'		=>	'Authentication' , 
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'remember_options'		=>	array
		(
			'param' 			=>	null ,
			'type' 			=>	'request' ,
			'expires' 			=>	'30' ,
			'path'			=>	'/' ,
			'domain'			=>	null ,
			'secure'			=>	null ,
			'http_only'		=>	null
		) ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'guard'				=>	array
		(
			'salt' , 'password' , 'created' , 'last_login' , 'remember'
		) 
	);