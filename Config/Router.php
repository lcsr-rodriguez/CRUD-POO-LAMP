<?php namespace Config;

class Router
{
    # Constructor
    public function __construct(){

    }

    // 
    public static function run(Request $request){
        $controller = $request->getController() . "Controller";
        $route = ROOT . "Controllers" . DS . $controller . ".php";
        $method = $request->getMethod();
        $argument = $request->getArgument();

        if($method == "index.php"){
            $method = "index";
        }

        if(is_readable($route)){
            require_once $route;
            $instace = "Controllers\\" . $controller;
            $controller = new $instace;
            // if not exists
            if(!isset($argument)){
                call_user_func(array($controller, $method));
            }
            else{
                call_user_func_array(array($controller, $method), $argument);
            }
        }
    }

}

?>