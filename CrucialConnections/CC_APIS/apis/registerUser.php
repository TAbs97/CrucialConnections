<?php

require("../function.php");

$func = new Functions();

$a = $_POST['name'];
$b = $_POST['surname'];
$c = $_POST['email'];
$d = $_POST['role'];
$e = $_POST['password'];

$func->registerUser($a,$b,$c,$d,$e);

//echo "username : ".$a."\nPassword : ".$b;

?>