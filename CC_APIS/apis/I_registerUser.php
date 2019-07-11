<?php

require("../function.php");

$func = new Functions();

// $a = @($_POST["CLIENT_NAME"]);
// $b = @($_POST["CLIENT_SURNAME"]);
// $c = @($_POST["EMAIL"]);
// $d = @($_POST["C_PASSWORD"]);instructor

$data = json_decode(file_get_contents('php://input'));

$a = $data->INSTRUCTOR_NAME;
$b = $data->INSTRUCTOR_SURNAME;
$c = $data->EMAIL;
$d = $data->USER_PASSWORD;

 $func->registerUser($a,$b,$c,$d);



//echo "INSTRUCTOR_NAME : ".$a."\n INSTRUCTOR_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>