<?php

defined('BASEPATH') OR exit('No direct script access allowed');   

class StudentModel extends CI_Model{

public function student_data()
{   //its like a inheritance concept we can access the child class in its parent class 
    $studclass=$this->student_class();
    return " His name is Krishna . His class is ".$studclass;
    //return "krishna";
}
private function student_class()
{
    return $stud_class= "BECSE";
}

public function showf($id)
{
    if($id == '1')
        {
            return $result = "user1";
        }
    else if($id =='2')
        {
            return $result = "user2";
        }
    else{
        return " New User";
            }
}
}