<?php namespace Config;

class Connection
{
    private $con;
    private $data = array(
        "host" => "localhost",
        "user" => "admin",
        "pass" => "31admin",
        "db" => "db_students",
    );

    # Constructor
    public function __construct(){
        $this->con = new \mysqli(
            $this->data["host"],// host
            $this->data["user"],// user
            $this->data["pass"],// password
            $this->data["db"] // database
        );
    }

    // SQL simple
    public function simpleQuery($sql){
        $this->con->query($sql);
    }

    // Get data of SQL instruction
    public function getDataSQL($sql){
        $response = $this->con->query($sql);

        return $response;
    }
}

?>