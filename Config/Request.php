<?php namespace Config;

class Request
{
    private $controller;
    private $method;
    private $argument;

    # Constructor
    public function __construct(){
        // if exists
        if(isset($_GET["url"])){
            $route = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $route = explode("/", $route); // separator, array => get string for separator
            $route = array_filter($route);

            // Route for index
            if($route[0] == "index.php"){
                $this->controller = "student";
            }
            else{
                $this->controller = strtolower(array_shift($route));
            }

            $this->method = strtolower(array_shift($route));

            if(!$this->method){
                $this->method = "index";
            }
            $this->argument = $route;
        }
    }

    // Setters and Getters
    public function getController(){
        return $this->controller;
    }
    
    public function getMethod(){
        return $this->method;
    }

    public function getArgument(){
        return $this->argument;
    }

}



?>