<?php namespace Controllers;

use Models\Student as Student;

class studentController
{

    private $student;

    public function __construct(){
        $this->student = new Student();
    }

    public function index(){
        $data = $this->student->toList();

        return $data;
    } 
}

$students = new studentController();

?>