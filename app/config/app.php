<?php

	/*
	| ---------------------------------------------------
	| Application Main Cofiguration File
	| ----------------------------------------------------------
	|
	| This files controls the directories and files to use with the autoloader
	| it also hold the aliases for class names
	|
	*/
	
	return array
	(
		/*
		| ------------------------------------------------------------------------------------
		| Directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'directories'			=>	array( ) ,
		/*
		| ------------------------------------------------------------------------------------
		| Namespace directories with classes for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'namespaces'			=>	array( ) ,
		/*
		| ------------------------------------------------------------------------------------
		| Class files for the autoloader
		| ------------------------------------------------------------------------------------
		*/
		'files'				=>	array( ) ,
		/*
		| ------------------------------------------------------------------------------------
		| Class aliases
		| ------------------------------------------------------------------------------------
		*/
		'aliases'				=>	array
		(
			// SYSTEM
			'App'				=>	'fluidphp\framework\App' ,
			'Cli'					=>	'fluidphp\framework\Cli' ,
			'Module'				=>	'fluidphp\framework\Module\Manager' ,
			'HandyMan'			=>	'PtcHandyMan' ,
			'Router'				=>	'PtcRouter' ,
			'Form'				=>	'PtcForm' ,
			'Auth'				=>	'PtcAuth' ,
			'View'				=>	'PtcView' ,
			'DB'					=>	'PtcDb' ,
			'QueryBuilder'			=>	'PtcQueryBuilder' ,
			'Model'				=>	'PtcMapper' ,
			'Debug'				=>	'PtcDebug' ,
			'Event'				=>	'PtcEvent'
		) ,
		/*
		|--------------------------------------------------------------------------
		| Application URL
		|--------------------------------------------------------------------------
		*/
		'url' 					=>	'http://localhost' ,
		/*
		|--------------------------------------------------------------------------
		| Application Main Folder Path
		|--------------------------------------------------------------------------
		*/
		'env' 				=>	'' ,
		/*
		|--------------------------------------------------------------------------
		| Application Timezone
		|--------------------------------------------------------------------------
		*/
		'timezone' 			=>	'Europe/Madrid' ,
		/*
		|--------------------------------------------------------------------------
		| Application Locale Configuration
		|--------------------------------------------------------------------------
		*/		
		'locale' 				=>	'en' ,
		/*
		| ------------------------------------------------------------------------------------
		| Check Router Configuration when building routes
		| ------------------------------------------------------------------------------------
		*/
		'check_router_config'	=>	true ,
		/*
		| --------------------------------------------------------------------------------------
		| Test Environment parameter
		| --------------------------------------------------------------------------------------
		*/
		'test_env'				=>	true
	);