<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

$data = json_decode(file_get_contents('php://input'));

$a = $data->EMAIL;
$b = $data->CODE_NAME;
$c = $data->$packageID1;
$d = $data->$packageID2;
$e = $data->$packageID3;



 $func->selectPackage($a,$b,$c,$d,$e);



// echo "CLIENT_NAME : ".$a."\nCLIENT_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ";

?>