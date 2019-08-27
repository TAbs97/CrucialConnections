<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

//  $a = @($_POST["EMAIL"]);
//  $b = @($_POST["C_PASSWORD"]);

$data = json_decode(file_get_contents('php://input'));
// $a = $data->EMAIL;
// $b = $data->A_PASSWORD;

 $Vehicle= $func->Vehicle_Display();

if($Vehicle){
    echo json_encode(array("data"=>$Vehicle->fetch_assoc(),"rows" => $Vehicle->num_rows));
}
// else{
//     echo json_encode(array("data"=>"empty"));

// }
//echo "EMAIL : ".$a."\n C_PASSWORD : ".$b;

?>