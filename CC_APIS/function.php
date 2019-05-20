<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "drivebox";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 class Functions {

    //selecting all users
    function getUsers(){
        global $conn;
        $sql = "SELECT * FROM users";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()){
                print_r($row)."<br/>";
            }
        }
    }

    function login($username,$password){
        global $conn;
        $sql = "SELECT * FROM users WHERE U_EMAIL = '".$username."' AND U_PASSWORD = '".$password."'";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
               print_r($results->fetch_assoc())."<br/>";
              // echo "Found";
        }else{
            echo "Not Found";
        }
    }

    function registerUser($name,$surname,$email,$role,$password){
        global $conn;
        $sql = "INSERT INTO users VALUES('','".$name."','".$surname."','".$email."',".$role.",'".$password."',0.0)";
        if ($conn->query($sql)) {
            echo "Successful";
        }else{
            echo "Falied";
        }
    }
}

?> 