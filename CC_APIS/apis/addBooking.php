<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

//  $a = @($_POST["EMAIL"]);
//  $b = @($_POST["C_PASSWORD"]);

$data = json_decode(file_get_contents('php://input'));

$clientId = $data->clientId;
$packageId = $data->packageId;
$numDays = $data->numDays;
$time1 = $data->time1;
$date2 = $data->date2;
$time2 = $data->time2;
$date3 = $data->date3;
$time3 = $data->time3;
 $login = $func->book_a_lesson($clientId,$packageId,$numDays,$date1,$time1,$date2,$time2,$date3,$time3);

// if($login){
//     echo json_encode(array("data"=>$login->fetch_assoc(),"rows" => $login->num_rows));
// }
// else{
//     echo json_encode(array("data"=>"empty"));

// }
//echo "EMAIL : ".$a."\n A_PASSWORD : ".$b;

?>