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

    //selecting all user
    function getUsers(){
        global $conn;
        $sql = "SELECT * FROM client";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()){
                print_r($row)."<br/>";
            }
        }
    }



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

    function I_login($email,$password){
        global $conn;
        $sql = "SELECT * FROM instructor WHERE EMAIL = '".$email."' AND C_PASSWORD = '".$password."'";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
               return $results; 
               echo "Found";
        }else{
            echo "Not Found";
        }
    }

    function A_login($email,$password){
        global $conn;
        $sql = "SELECT * FROM [admin] WHERE EMAIL = '".$email."' AND C_PASSWORD = '".$password."'";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
               return $results; 
               echo "Found";
        }else{
            echo "Not Found";
        }
    }


    function C_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "INSERT INTO client VALUES('','".$name."','".$surname."','".$email."','".$password."')";
        if ($conn->query($sql)) {
            echo "Registered successfully";
        }else{
            echo "Falied";
        }
    }

    function I_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "INSERT INTO instructor VALUES('','".$name."','".$surname."','".$email."','".$password."')";
        if ($conn->query($sql)) {
            echo "Registered successfully";
        }else{
            echo "Falied";
        }
    }

    function A_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "INSERT INTO [admin] VALUES('','".$name."','".$surname."','".$email."','".$password."')";
        if ($conn->query($sql)) {
            echo "Registered successfully";
        }else{
            echo "Falied";
        }
    }
}

?> 





























