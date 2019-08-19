<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

$data = json_decode(file_get_contents('php://input'));

$a = $data->EMAIL;
$b = $data->CODE_NAME;
$c = $data->PACKAGE_NAME;



 $func->selectPackage($a,$b,$c);



//echo "CLIENT_NAME : ".$a."\nCLIENT_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>