<?php

	/*
	|--------------------------------------------------------------------------
	| Application Filters
	|--------------------------------------------------------------------------
	*/

	App::start( function( $options , $object )
	{

	} );

	App::stop( function( $request , $response )
	{
		
	} );

	/*
	|--------------------------------------------------------------------------
	| Global Route Patterns
	|--------------------------------------------------------------------------
	*/
	
	Router::when( '/*' , function( )
	{

	} );
	
	/*
	|--------------------------------------------------------------------------
	| Route Filters
	|--------------------------------------------------------------------------
	*/
	
	Router::filter( 'login.basic' , function( ) // basic user login filter
	{
	
	} );
	