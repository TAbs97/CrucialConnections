<?php

require("../function.php");

$func = new Functions();


$data = json_decode(file_get_contents('php://input'));

$a = $data->MODEL;
$b = $data->VEHICLE_ID;
$c = $data->VEHICLE_NAME;

 $func->registerVehicle($a,$b,$c);



echo "MODEL : ".$a."\n VEHICLE_ID : ".$b."\n VEHICLE_NAME : ".$c;

?>