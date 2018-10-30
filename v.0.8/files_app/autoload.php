<?php

	// define('ROOT_PATH', __DIR__);
	include_once 'paths.php' ;
	// echo  IMAGES_PATH ;

	function loadModelFiles($file_name){
		$fullpath = ROOT_PATH.'/models/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	function loadBeanFiles($file_name){
		$fullpath = ROOT_PATH.'/beans/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	function loadControllerFiles($file_name){
		$fullpath = ROOT_PATH.'/controllers/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	function loadHelperFiles($file_name){
		$fullpath = ROOT_PATH.'/helpers/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	spl_autoload_register("loadModelFiles");
	spl_autoload_register("loadBeanFiles");
	spl_autoload_register("loadControllerFiles");
	spl_autoload_register("loadHelperFiles");

	require_once ROOT_PATH.'/config/config.php' ;

