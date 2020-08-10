<?php namespace Models;

use Config as Access;

class Student
{
    private $id;
    private $name;
    private $age;
    private $average;
    private $image;
    private $id_subjects;
    private $created_at;
    private $con;

    # Constructor
    public function __construct(){
        $this->con = new Access\Connection();
    }

    // This method ....
    public function toList(){
        $sql = "SELECT t1.*, t2.name as subject_name FROM students t1 INNER JOIN subjects t2 ON t1.id_subjects = t2.id";
        $response = $this->con->getDataSQL($sql);

        return $response;
    }

    // This method ....
    public function add(){
        $sql = "INSERT INTO `students` (name, age, average, image, id_subjects) VALUES
        ('{$this->name}', '{$this->age}','{$this->average}', '{$this->image}','{$this->id_subjects}')";

        $this->con->simpleQuery($sql);
    }

    // This method ....
    public function delete(){
        $sql = "DELETE FROM `students` WHERE id = '{$this->id}' ";

        $this->con->simpleQuery($sql);
    }

    // This method ....
    public function edit(){
        $sql = "UPDATE `students` SET name = '{$this->name}', age = '{$this->age}', average = '{$this->average}',
                id_subjects = '{$this->id_subjects}' WHERE id = '{$this->id}' ";

        $this->con->simpleQuery($sql);
    }

    // Return view to index
    public function view(){
        $sql = "SELECT t1.*, t2.name as subject_name FROM students t1 INNER JOIN subjects t2 ON
                t1.id_subjects = t2.id WHERE t1.id = '{$this->id}' ";

        $response = $this->con->getDataSQL($sql);

        $row = $response->fetch_assoc();
        return $row;
    }

    // Setters and Getters
    public function setStudent($attr, $value){
        $this->$attr = $value;
    }

    public function getStudent($attr){
        return $this->$attr;
    }

}

?>
