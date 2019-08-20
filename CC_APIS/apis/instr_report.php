<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

$data = json_decode(file_get_contents('php://input'));

$a = $data->REPORT;
$b = $data->INSTRUCTOR_ID;
$c = $data->CLIENT_ID;
$d = $data->rating;

 $func->instr_report($a,$b,$c,$d);



//echo "CLIENT_NAME : ".$a."\nCLIENT_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>