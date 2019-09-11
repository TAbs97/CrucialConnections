<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DriveBox</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/hStyle.css">
    <li>
</head>
<body>

    <ul>                              
        <ul>
          <li> <img src="img/DriveBox.png" alt="logo" class="logo"></li>
        </ul>        
    </ul>
<body>

<div id='fg_membersite'>
<form action="insertBooking.php" method="post">
<fieldset class="Booking">
<legend>Make Booking</legend>

  <p>
  <label for="booking_clientid">Client Name *:</label><br>
  <select name="booking_clientid">  
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drivebox1";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CLIENT_ID, CLIENT_NAME, CLIENT_SURNAME FROM client";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
     
		echo "<option value='" . $row['CLIENT_ID'] . "'>" . $row['CLIENT_NAME'] . " "  . $row['CLIENT_SURNAME'] .  "</option>";
    }
		
} else {
    echo "0 results";
}

$conn->close();
?>
</select> 
  </p> 
  
  <p>
  <label for="booking_instructorid">Instructor *:</label><br>
    <select name="booking_instructorid">  
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drivebox1";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT INSTUCTOR_ID, INSTRUCTOR_NAME, INSTRUCTOR_SURNAME FROM instructor";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
     
		echo "<option value='" . $row['INSTUCTOR_ID'] . "'>" . $row['INSTRUCTOR_NAME'] . " "  . $row['INSTRUCTOR_SURNAME'] .  "</option>";
    }
		
} else {
    echo "0 results";
}

$conn->close();
?>
</select> 
  </p> 


  <p>
  <label for="booking_packageid">Select Package *:</label><br>
    <select name="booking_packageid">  
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drivebox1";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT PACKAGE_ID, PACKAGE_NAME, DESCRIPTION, PACKAGE_PRICE, CODE_ID, NO_OF_LESSON FROM package";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
     
		echo "<option value='" . $row['PACKAGE_ID'] . "'>" . $row['PACKAGE_NAME'] ."</option>";
    }
		
} else {
    echo "0 results";
}

$conn->close();
?>
</select> 
</p> 
  
  <p>
   <label for="booking_vehicleid">Vehicle *:</label><br>
    <select name="booking_vehicleid">  
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drivebox1";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT 	VEHICLE_ID,VEHICLE_NAME,MODEL FROM vehicle";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
     
		echo "<option value='" . $row['VEHICLE_ID'] . "'>" . $row['VEHICLE_NAME'] . " "  . $row['MODEL'] .  "</option>";
    }
		
} else {
    echo "0 results";
}

$conn->close();
?>
</select> 
  </p> 

   <p>
  <label for="vehicleModel">Lesson Start Date *:</label><br>
  <input type="date" name="booking_start_date" id="bookingStartDate" required><br>
  </p>
  
  
  
  

  
<input type="submit" value="Submit">
  
</fieldset>
</form>


</body>
</html>