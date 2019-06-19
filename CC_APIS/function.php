<?php
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
    function C_login($email,$password){
        global $conn;
        $sql = "SELECT * FROM client WHERE EMAIL = '".$email."' AND C_PASSWORD = '".$password."'";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
               return $results; 
               echo "Found";
        }else{
            echo "Not Found";
        }
    }
// instructor login
    function I_login($email,$password){
        global $conn;
        $sql = "SELECT * FROM instructor WHERE EMAIL = '".$email."' AND I_PASSWORD = '".$password."'";
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
        $sql = "SELECT * FROM adminn WHERE EMAIL = '".$email."' AND A_PASSWORD = '".$password."'";
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
}

?> 





























