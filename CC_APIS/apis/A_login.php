<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

//  $a = @($_POST["EMAIL"]);
//  $b = @($_POST["C_PASSWORD"]);

$data = json_decode(file_get_contents('php://input'));
$a = $data->EMAIL;
$b = $data->USER_PASSWORD;

 $login = $func->A_login($a,$b);

// if($login){
//     echo json_encode(array("data"=>$login->fetch_assoc(),"rows" => $login->num_rows));
// }
// else{
//     echo json_encode(array("data"=>"empty"));

// }
//echo "EMAIL : ".$a."\n A_PASSWORD : ".$b;

?>