<?php

namespace StudentManagement;

use student\students;

class StudentManagement
{
    public $allstudents = [] ;

    public function displayAll()
    {
        $allstudents = $this->allstudents ;
        foreach ($allstudents as $index => $valeu) {
            return "student {$index['ID']} : {$index['FirstName']} {$index['LastName']} , {$index['Age']}";
        }
    }

    public function add($FirstName , $LastName , $Age)
    {
        $student = new students() ;
        $student->Firstname = $FirstName ;
        $student->LastName = $LastName ;
        $student->Age = $Age ;
        $studentsinfo = array(
            'FirstName' => $student->Firstname ,
            'LastName'  => $student->LastName  ,
            'Age'       => $student->Age ,
            'ID'       => $student::$ID
    );
    }
}