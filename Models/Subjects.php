<?php namespace Models;

class Subjects
{
    private $id;
    private $name;
    private $con;

    # Constructor
    public function __construct(){
        $this->con = new Connection();
    }

    // Setters and Getters
    public function setStudent($attr, $content){
        $this->attr = $content;
    }

    public function getStudent($attr){
        return $this->attr;
    }

    public function toList(){
        $sql = "SELECT * FROM `subjects` ";
        $response = $this->con->getDataSQL($sql);

        return $response;
    }

    public function add(){
        $sql = "INSERT INTO `subjects` (name) VALUES ('{$this->name}')";
        $this->con->simpleQuery($sql);
    }

    public function delete(){
        $sql = "DELETE FROM `subjects` WHERE id = '{$this->id}' ";
        $this->con->simpleQuery($sql);
    }

    public function edit(){
        $sql = "UPDATE FROM `subjects` SET name = '{$this->name}' WHERE id = '{$this->id}' ";
        $this->con->simpleQuery($sql);
    }

    public function view(){
        $sql = "SELECT * FROM `subjects` WHERE id = '{$this->id}' ";
        $response = $this->con->getDataSQL($sql);
        $row = $response->fetch_assoc();

        return $row; 
    }

}





?>