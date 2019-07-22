<?php

require("../function.php");

$func = new Functions();

// $a = @($_POST["CLIENT_NAME"]);
// $b = @($_POST["CLIENT_SURNAME"]);
// $c = @($_POST["EMAIL"]);
// $d = @($_POST["C_PASSWORD"]);

$data = json_decode(file_get_contents('php://input'));

$a = $data->ADMIN_NAME;
$b = $data->ADMIN_SURNAME;
$c = $data->EMAIL;
$d = $data->USER_PASSWORD;

 $func->A_registerUser($a,$b,$c,$d);



//echo "ADMIN_NAME : ".$a."\nADMIN_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>