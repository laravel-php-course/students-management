<?php

namespace student;

class students
{
    public static $Firstname ;
    public static $LastName ;
    public static $Age ;
    public static $ID = 0 ;

    public function __construct()
    {
        self::$ID++ ;

    }

    public static function displayInfo()
    {
        $fa = self::$Firstname ;
        $la = self::$LastName ;
        $ag = self::$Age ;
        echo "FirstName : {$fa} LastName : {$la} Age : {$ag}";
    }

}