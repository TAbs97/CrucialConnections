<?php
$connection = mysqli_connect('localhost', 'root',"");
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

// $servername = "localhost:8081";
// $dbname = "drivebox1";


// $conn = new mysqli($servername, $dbname);

// if ($conn->connect_error) {
//     echo " FAILED TO connect";
// } 

$sql = "DELETE FROM vehicle WHERE VEHICLEID=1234";

if ($conn->query($sql) === TRUE) {
    echo "vehicle removed";
} else {
    echo "Error vehicle removing " . $conn->error;
}

$conn->close();
?>