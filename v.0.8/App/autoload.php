<?php

	// define('ROOT_PATH', __DIR__);
	include_once 'global-paths.php' ;
	// echo  IMAGES_PATH ;

	function loadModelFiles($file_name){
		$fullpath = ROOT_PATH.'/Models/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	function loadBeanFiles($file_name){
		$fullpath = ROOT_PATH.'/Beans/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	function loadControllerFiles($file_name){
		$fullpath = ROOT_PATH.'/Controllers/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	function loadHelperFiles($file_name){
		$fullpath = ROOT_PATH.'/Helpers/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	spl_autoload_register("loadModelFiles");
	spl_autoload_register("loadBeanFiles");
	spl_autoload_register("loadControllerFiles");
	spl_autoload_register("loadHelperFiles");

	require_once ROOT_PATH.'/Config/config.php' ;

