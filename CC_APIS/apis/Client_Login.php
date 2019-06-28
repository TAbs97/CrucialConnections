<?php

require("../function.php");

$func = new Functions();

//  $a = @($_POST["EMAIL"]);
//  $b = @($_POST["C_PASSWORD"]);

$data = json_decode(file_get_contents('php://input'));
$a = $data->EMAIL;
$b = $data->USER_PASSWORD;

 $login = $func->login($a,$b);

if($login){
    echo json_encode(array("data"=>$login->fetch_assoc(),"rows" => $login->num_rows));
    //echo true;
}
else{
    echo json_encode(array("data"=>"empty"));
   // echo false;
}
echo "EMAIL : ".$a."\n USER_PASSWORD : ".$b;

?>