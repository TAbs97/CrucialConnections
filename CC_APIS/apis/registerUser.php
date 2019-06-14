<?php

require("../function.php");

$func = new Functions();

$a = $_POST['name'];
$b = $_POST['surname'];
$c = $_POST['email'];
$d = $_POST['role'];
$e = $_POST['password'];
$f =$_POST['balance'];

$conn = mysqli_connect($server, $a, $b, $c,$d,$e,$f);
$Data = $_POST['data'];
$Received = $_POST['received'];

$query = "INSERT INTO DATA(data, received) 
VALUES ('".$Data."','".$Received."')";
mysqli_query($conn, $query);
if (mysqli_query($conn, $query)) {
  echo "New record created successfully";
  } else {
  echo "Error: " .  $query . "<br>" . mysqli_error($conn);

mysqli_close($conn)
// $func->registerUser($a,$b,$c,$d,$e,$f);

// if($registerUser){
//     echo json_encode(array("data"=>$registerUser->fetch_assoc(),"rows" => $registerUser->num_rows));
// }else{
//     echo json_encode(array("data"=>"empty"));
// }

//echo "username : ".$a."\nPassword : ".$b;

?>