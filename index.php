<?php 
	define('APP_ROOT',dirname(__FILE__));


	define('APP_NAME','b2c');

	define('APP_PATH',APP_ROOT.'/b2c/');
	define('APP_DEBUG',TRUE);
	define('APP_DATA',APP_ROOT.'/data');
	define('RUNTIME_PATH',APP_ROOT.'/Public/Runtime');

	require './base/ThinkPHP.php';
 ?>