<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "drivebox1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$packageID = mysqli_real_escape_string($link, $_REQUEST['booking_packageid']);
$clientID = mysqli_real_escape_string($link, $_REQUEST['booking_clientid']);
$vehicleID = mysqli_real_escape_string($link, $_REQUEST['booking_vehicleid']);
$instructorID = mysqli_real_escape_string($link, $_REQUEST['booking_instructorid']);

$startLessonDate = mysqli_real_escape_string($link, $_REQUEST['booking_start_date']);
$CurrentTime  = mysqli_real_escape_string($link, $_REQUEST['booking_start_time']);
$NO_OF_LESSON_DAYS;
$PACKAGE_PRICE;
$CurrentDate = date("Y/m/d");



$conn =  mysqli_connect("localhost", "root", "", "drivebox1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT PACKAGE_ID,	PACKAGE_NAME,DESCRIPTION,PACKAGE_PRICE,CODE_ID,	NO_OF_LESSON FROM package WHERE PACKAGE_ID = '$packageID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
		$NO_OF_LESSON_DAYS = $row["NO_OF_LESSON"];
		$PACKAGE_PRICE = $row["PACKAGE_PRICE"];
	
$sql = "INSERT INTO booking (PACKAGE_ID,CLIENT_ID,VEHICLE_ID,INSTRUCTOR_ID,BOOKING_DATE,LESSON_DATE,LESSON_TIME,NO_OF_DAYS,PACKAGE_COST)  VALUES ($packageID,$clientID,$vehicleID,$instructorID,'$CurrentDate','$startLessonDate','$CurrentTime',$NO_OF_LESSON_DAYS,'$PACKAGE_PRICE')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
	   
 }
		
	
} else {
    echo "0 results";
}

$conn->close();








 
// Attempt insert query execution
/*$sql = "INSERT INTO booking (PACKAGE_ID,CLIENT_ID,VEHICLE_ID,INSTRUCTOR_ID,BOOKING_DATE,LESSON_DATE,LESSON_TIME,NO_OF_DAYS) VALUES ('', '4-6 Days', '£75.00')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);*/
?>