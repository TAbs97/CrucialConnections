<?php

// header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "drivebox1";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);

} 

 class Functions {

    //get clients
    function C_getUsers(){
        global $conn;
        $sql = "SELECT * FROM client";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()){
                print_r($row)."<br/>";
            }
        }
    }

    //get all instructors
    function I_getUsers(){
        global $conn;
        $sql = "SELECT * FROM instructor";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()){
                print_r($row)."<br/>";
            }
        }
    }

    // get admin
    function A_getUsers(){
        global $conn;
        $sql = "SELECT * FROM [admin]";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()){
                print_r($row)."<br/>";
            }
        }
    }


// client login
    function login($email,$password){
        global $conn;
        $sql = "SELECT * FROM client WHERE EMAIL = '".$email."' AND USER_PASSWORD ='".$password."'";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
               return $results; 
               echo "Found";
        }else{
            echo "Not Found";
        }
    }
// instructor login
    function Ins_login($email,$password){
        global $conn;
        $sql = "SELECT * FROM instructor WHERE EMAIL = '".$email."' AND USER_PASSWORD = '".$password."'";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
               return $results; 
               echo "Found";
        }else{
            echo "Not Found";
        }
    }

    // admin login
    function A_login($email,$password){
        global $conn;
        $sql = "SELECT * FROM adminn WHERE EMAIL = '".$email."' AND USER_PASSWORD = '".$password."'";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
               return $results; 
               echo "Found";
        }else{
            echo "Not Found";
        }
    }

// client register
    function C_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "INSERT INTO client VALUES('','".$name."','".$surname."','".$email."','".$password."')";
        if ($conn->query($sql)) {
            echo "Registered successfully";
        }else{
            echo "Falied";
        }
    }

    // instructor register
    function I_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "INSERT INTO instructor VALUES('','".$name."','".$surname."','".$email."','".$password."')";
        if ($conn->query($sql)) {
            echo "Registered successfully";
        }else{
            echo "Falied";
        }
    }

    // admin register
    function A_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "INSERT INTO adminn VALUES('','".$name."','".$surname."','".$email."','".$password."')";
        if ($conn->query($sql)) {
            echo "Registered successfully";
        }else{
            echo "Falied";
        }
    }

     // Add vehicle
     function AddVehicle($vehicleName,$model,$Code_ID){
        global $conn;
        $sql = "INSERT INTO vehicle('','".$VEHICLE_NAME."','".$MODEL."','".$CODE_ID."')";
        if ($conn->query($sql)) {
            echo "Registered successfully";
        }else{
            echo "Falied";
        }
    }
    // selectClients
    function client_Display(){
        global $conn;
        $sql = "select * from client";
        $query=mysqli_query($conn,$sql);
         
            while($results=mysqli_fetch_assoc($query)){
                $rows[]=$results;
                
                //echo(",");
            }
            echo json_encode($rows);
    
    }

    function clientDetails(){
        global $conn;
        $sql = "select client.";
        $query=mysqli_query($conn,$sql);
         
            while($results=mysqli_fetch_assoc($query)){
                $rows[]=$results;
                
                //echo(",");
            }
            echo json_encode($rows);
    
    }
///select bookings
    function booking_Display(){
        global $conn;
        $sql = "select * from booking";
        $query=mysqli_query($conn,$sql);
         
            while($results=mysqli_fetch_assoc($query)){
                $rows[]=$results;
                
                //echo(",");
            }
            echo json_encode($rows);
    
    }
}
    
?>
 





























