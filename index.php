<?php 

/**
 * Globals Const
 */
define("DS", DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);

// Include Autoload
require_once "Config/Autoload.php";
Config\Autoload::run_autoload();
Config\Router::run(new Config\Request());

?>
