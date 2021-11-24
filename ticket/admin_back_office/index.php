<?php 
	header('Access-Control-Allow-Origin: *');  
	header('Content-Type: text/html; charset=utf-8');
	date_default_timezone_set('Asia/Bangkok');
	ob_start();
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 'ON');
	if($_SERVER['SERVER_NAME'] == 'localhost'){
		require_once($_SERVER['DOCUMENT_ROOT'].'/lotrich/config/domains/lotrich/config.php'); 
		require_once($_SERVER['DOCUMENT_ROOT'].'/lotrich/lib/function/main_function.php');
		require_once('catalog/setup.php'); 
		require_once($_SERVER['DOCUMENT_ROOT'].'/lotrich/lib/system/loader/autoload.php'); 
	}else{
		require_once('/home/charoenlap/domains/charoenlap.com/config/domains/lotrich/config.php'); 
		require_once('/home/charoenlap/domains/charoenlap.com/lib/function/main_function.php');
		require_once('catalog/setup.php'); 
		require_once('/home/charoenlap/domains/charoenlap.com/lib/system/loader/autoload.php'); 
	}
?>