<?php

require("../function.php");

$func = new Functions();

$a = $_POST['username'];
$b = $_POST['password'];

$login = $func->login($a,$b);

if($login){
    echo json_encode(array("data"=>$login->fetch_assoc(),"rows" => $login->num_rows));
}else{
    echo json_encode(array("data"=>"empty"));
}
//echo "username : ".$a."\nPassword : ".$b;

?>
