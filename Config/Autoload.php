<?php namespace Config;

class Autoload
{
    # Constructor
    public function __construct(){

    }

    public static function run_autoload(){
        spl_autoload_register(function($className){
            $path = str_replace("\\", "/", $className) . ".php";
            if(file_exists($path)){
                require_once $path;
            }
        });
    }
}





?>