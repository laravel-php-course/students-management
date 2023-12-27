<?php
 include 'StudentManagement.php' ;

$a = new StudentManagement();
$a->add("ali" , "vakili" , "14");
echo $a->displayAll();