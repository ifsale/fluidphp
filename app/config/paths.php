<?php
	
	/*
	| ----------------------------------------------------------
	| Application Paths Configuration File
	| ----------------------------------------------------------
	|
	| This files holds all application paths.
	| You can add new paths here relative 
	| to directories you have created
	|
	*/
	
	return array
	(
		'app'		=>	ptc_path( 'root' ) . '/app' ,
		'config'		=>	ptc_path( 'root' ) . '/app/config' ,
		'controllers'	=>	ptc_path( 'root' ) . '/app/controllers' ,
		'models'		=>	ptc_path( 'root' ) . '/app/models' ,
		'views'		=>	ptc_path( 'root' ) . '/app/views' ,
		'interfaces'	=>	ptc_path( 'root' ) . '/app/interfaces' ,
		'observers'	=>	ptc_path( 'root' ) . '/app/observers' ,
		'xml'			=>	ptc_path( 'root' ) . '/app/xml' ,
		'helpers'		=>	ptc_path( 'root' ) . '/app/helpers' ,
		'lib'			=>	ptc_path( 'root' ) . '/app/lib' ,
		'public'		=>	ptc_path( 'root' ) . '/public' ,
		'js'			=>	ptc_path( 'root' ) . '/public/js' ,
		'css'			=>	ptc_path( 'root' ) . '/public/css' ,
		'images'		=>	ptc_path( 'root' ) . '/public/images'
	);