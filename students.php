<?php

namespace student;

class students
{
    public $Firstname ;
    public $LastName ;
    public $Age ;
    public static $ID = 0 ;

    public function __construct()
    {
        self::$ID++ ;
    }

    public function displayInfo()
    {
        return "FirstName : {$this->Firstname} LastName : {$this->LastName} Age : {$this->Age}";
    }

}