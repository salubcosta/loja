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


if(ENVIRONMENT == 'development'){
	define('DBHOST', 'localhost');
	define('DBNAME', 'loja');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
}else{
	define('DBHOST', 'SERVIDOR');
	define('DBNAME', 'DB_SERVIDOR');
	define('DBUSER', 'USER_SERVIDOR');
	define('DBPASS', 'PASS_SERVIDOR');
}
define('DSN', 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8;');