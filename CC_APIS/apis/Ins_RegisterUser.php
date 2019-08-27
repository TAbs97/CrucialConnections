<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();



$data = json_decode(file_get_contents('php://input'));

$a = $data->INSTRUTOR_NAME;
$b = $data->INSTRUTOR_SURNAME;
$c = $data->EMAIL;
$d = $data->USER_PASSWORD;

 $func->I_registerUser($a,$b,$c,$d);

?>