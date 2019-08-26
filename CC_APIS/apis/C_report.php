<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

$data = json_decode(file_get_contents('php://input'));

$a = $data->CLIENT_ID;
$b = $data->REPORT;

 $func->client_balace($a,$b);



//echo "CLIENT_NAME : ".$a."\nCLIENT_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>