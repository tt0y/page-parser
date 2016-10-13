<?php

// 1. Общие настройки
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Константы для ссылок
define('ROOT', dirname(__FILE__));
define('WWW', "http://".$_SERVER['SERVER_NAME']."/");

// 2. Подключим классы
require_once (ROOT.'/models/Router.php'); 
require_once (ROOT.'/models/Parser.php');
require_once (ROOT.'/models/Db.php');

//require_once (ROOT.'/views/header.php');
//require_once (ROOT.'/views/menu.php');

// 3. Вызов Router
$router = new Router(); 
$router->run();

//require_once (ROOT.'/views/footer.php');
