<?php
require_once 'StudentManagement.php' ;
require_once 'Students.php' ;
use StudentManagement\StudentManagement;
use \student\students;

StudentManagement::add("ali" , "gholami" , "45");
StudentManagement::add("farzad" , "frouzanfar" , "24");
StudentManagement::add("kourosh" , "khalili" , "16");
StudentManagement::add("kamran" , "alizade" , "33");

/*students::displayInfo();*/
/*StudentManagement::displayOne("FirstName" , "kourosh");*/
/*StudentManagement::deleteAll();*/
/*StudentManagement::deleteOne('ali');*/
/*StudentManagement::displayAll();*/