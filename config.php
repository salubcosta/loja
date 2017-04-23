<?php
require_once 'environment.php';

spl_autoload_register(function($class){
	if(file_exists(DIRETORIO.'/controllers/'.$class.'.php')){
		require_once DIRETORIO.'/controllers/'.$class.'.php';
	}elseif(file_exists(DIRETORIO.'/models/'.$class.'.php')){
		require_once DIRETORIO.'/models/'.$class.'.php';
	}else{
		require_once DIRETORIO.'/core/'.$class.'.php';
	}
});



define('DBHOST', 'localhost');
define('DBNAME', 'loja');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DSN', 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8;');