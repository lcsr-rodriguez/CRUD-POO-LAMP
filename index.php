<?php 

/**
 * Globals Const
 */
define("DS", DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define("URL", "http://" . $_SERVER['HTTP_HOST']);

// Include Autoload
require_once "Config/Autoload.php";
Config\Autoload::run_autoload();
require_once "Views/Template.php";
Config\Router::run(new Config\Request());

?>
