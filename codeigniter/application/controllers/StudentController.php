<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class StudentController extends CI_Controller
{
    // public function index()
    // {
    //     $this->load->model('StudentModel');
    //     $student = $this->StudentModel->student_data();
    //     echo $student;
    //     //echo " Controller Working";
    // }

    public function index() { 
        $this->load->model('StudentModel','stud');
        //$student = new StudentModel;
        //$student = $student->student_data();
        $student = $this->stud->student_data(); 
        //$sclass=$this->stud->student_class();
        //var_dump($student);
        //echo $student;
   die($student);
}

public function show($id)
{
    $this->load->model('StudentModel','stud');
    $final= $this ->stud->showf($id);
     die( $final);

}
}
?>