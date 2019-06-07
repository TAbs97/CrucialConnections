<?php

require("../function.php");

$func = new Functions();

$a = $_POST['username'];
$b = $_POST['password'];

$func->login($a,$b);

//echo "username : ".$a."\nPassword : ".$b;

?>