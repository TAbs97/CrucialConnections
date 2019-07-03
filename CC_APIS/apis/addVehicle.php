<?php

require("../function.php");

$func = new Functions();

// $a = @($_POST["CLIENT_NAME"]);
// $b = @($_POST["CLIENT_SURNAME"]);
// $c = @($_POST["EMAIL"]);
// $d = @($_POST["C_PASSWORD"]);

$data = json_decode(file_get_contents('php://input'));

$a = $data->vehicleName;
$b = $data->model;
$c = $data->CodeID;


 $func->Addvehicle($a,$b,$c);



echo "CLIENT_NAME : ".$a."\nCLIENT_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>