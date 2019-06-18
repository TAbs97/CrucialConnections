<?php

require("../function.php");

$func = new Functions();

$a = @($_POST["CLIENT_NAME"]);
$b = @($_POST["CLIENT_SURNAME"]);
$c = @($_POST["EMAIL"]);
$d = @($_POST["C_PASSWORD"]);


$func->registerUser($a,$b,$c,$d);


echo "CLIENT_NAME : ".$a."\nCLIENT_SURNAME : ".$b."\nEMAIL : ".$c."\nC_PASSWORD : ".$d;

?>