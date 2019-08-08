<?php
header('Access-Control-Allow-Origin: *');

require("../function.php");

$func = new Functions();

// $a = @($_POST["CLIENT_NAME"]);
// $b = @($_POST["CLIENT_SURNAME"]);
// $c = @($_POST["EMAIL"]);
// $d = @($_POST["C_PASSWORD"]);

$data = json_decode(file_get_contents('php://input'));

$a = $data->CODESELECTED;
$b = $data->PACKAGESELECTED;
$c = $data->CLIENT_ID;



 $func->selectPackage($a,$b,$c);



//echo "CLIENT_NAME : ".$a."\nCLIENT_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>