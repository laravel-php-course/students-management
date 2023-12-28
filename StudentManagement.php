<?php

namespace StudentManagement;
require_once 'students.php' ;
use student\students;

class StudentManagement
{
    public static $allstudents = array() ;
    public static function deleteOne($ID)
    {
        $allstudents = self::$allstudents ;
        foreach ($allstudents as $index => $valeu) {
            $eachstudent = $allstudents[$index] ;
            echo '</br>';
            foreach ($eachstudent as $index2 => $valeu2) {
                if ($valeu2['FirstName'] == $ID){
                    unset($eachstudent[$index2]);



                }

            }

        }}
    public static function displayAll()
    {
        $allstudents = self::$allstudents ;
        foreach ($allstudents as $index => $valeu) {
            $eachstudent = $allstudents[$index] ;
            echo '</br>';
            foreach ($eachstudent as $index2 => $valeu2) {
                $eachstudent1 = $eachstudent[$index2] ;
                foreach ($eachstudent1 as $index3 => $valeu3) {
                    echo $eachstudent1[$index3] ;

                }
            }
        }

    }
    public static function displayOne($prop , $val)
    {
        $allstudents = self::$allstudents ;
        foreach ($allstudents as $index => $valeu) {
            $eachstudent = $allstudents[$index] ;
            echo '</br>';
            foreach ($eachstudent as $index2 => $valeu2) {
                $eachstudent1 = $eachstudent[$index2] ;
                foreach ($eachstudent1 as $index3 => $valeu3) {
                    if ($eachstudent1[$prop] == $val) {
                    echo $eachstudent1[$index3] ;

                }
            }}
        }

    }



    public static function deleteAll()
    {
        self::$allstudents = [];
    }

    public static function add($FirstName , $LastName , $Age)
    {
        students::$Firstname = $FirstName ;
        students::$LastName = $LastName ;
        students::$Age = $Age ;
        self::$allstudents[] = [
            'student' =>
                [
            'FirstName' => $FirstName ,
            'LastName'  => $LastName  ,
            'Age'       => $Age ,
            'ID'       => students::$ID
                ]

    ];


    }
}