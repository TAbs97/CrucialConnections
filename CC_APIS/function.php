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
        $sql = "SELECT * FROM adminn";
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
        $sql = "SELECT * FROM client WHERE EMAIL ='".$email."'";
        $results = $conn->query($sql);
        if($results->num_rows > 0){
            echo "User Already registered";
        }
        else
        {
        $sql = "INSERT INTO client VALUES('','".$name."','".$surname."','".$email."','".$password."')";
            if ($conn->query($sql)) {
                echo "Registered successfully";
                }
                else
                {
                echo "Failed";
            }
        }

    }

    // instructor register
    function I_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "SELECT * FROM instructor WHERE EMAIL ='".$email."'";
        $results = $conn->query($sql);
        if($results->num_rows > 0){
            echo "User Already registered";
        }
        else
        {
            $sql = "INSERT INTO instructor VALUES('','".$name."','".$surname."','".$email."','".$password."')";
            if ($conn->query($sql)) {
                echo "Registered successfully";
            }else{
                echo "Falied";
            }
        }
    }

    // admin register
    function A_registerUser($name,$surname,$email,$password){
        global $conn;
        $sql = "SELECT * FROM adminn WHERE EMAIL ='".$email."'";
        $results = $conn->query($sql);
        if($results->num_rows > 0){
            echo "User Already registered";
        }
        else
        {
            $sql = "INSERT INTO adminn VALUES('','".$name."','".$surname."','".$email."','".$password."')";
            if ($conn->query($sql)) {
                echo "Registered successfully";
            }else{
                echo "Falied";
            }
        }
    }

     // Add vehicle
     function AddVehicle($vehicleName,$model,$Code_ID){
        global $conn;
        $sql = "SELECT * FROM adminn WHERE EMAIL ='".$CODE_ID."'";
        $results = $conn->query($sql);
        if($results->num_rows > 0){
            echo "User Already registered";
        }
        else
        {
            $sql = "INSERT INTO vehicle('','".$VEHICLE_NAME."','".$MODEL."','".$CODE_ID."')";
            if ($conn->query($sql)) {
                echo "Registered successfully";
            }else{
            echo "Falied";
            }
        }
    }
    // selectClients
    function client_Display(){
        global $conn;
        $sql = "SELECT * from client";
        $query=mysqli_query($conn,$sql);
         
            while($results=mysqli_fetch_assoc($query)){
                $rows[]=$results;
                
                //echo(",");
            }
            echo json_encode($rows);
    
    }

    function clientDetails($email,$id){
        global $conn;
        $sql = "SELECT client.CLIENT_NAME,client.CLIENT_SURNAME,client.EMAIL,package_selection.CODE_NAME,package_selection.PACKAGE_NAME 
        FROM client,package_selection 
        WHERE client.Email='".$email."'=package_selection.Email='".$email."' and client.CLIENT_ID='".$id."' limit 1";
        $query=mysqli_query($conn,$sql);
         
            while($results=mysqli_fetch_assoc($query)){
                $rows[]=$results;
                
                //echo(",");
            }
            echo json_encode($rows);
    
    }

    function bookedlesson(){
        global $conn;
        $sql ="SELECT booking.BOOKING_ID,booking.CLIENT_ID,booking.BOOKING_DATE,booking.LESSON_DATE,booking.LESSON_TIME FROM booking";
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
        $sql = "SELECT * from booking";
        $query=mysqli_query($conn,$sql);
         
            while($results=mysqli_fetch_assoc($query)){
                $rows[]=$results;
                
                //echo(",");
            }
            echo json_encode($rows);
    
    }
     // selectInstructor
     function Instructor_Display(){
        global $conn;
        $sql = "SELECT * from Instructor";
        $query=mysqli_query($conn,$sql);
         
            while($results=mysqli_fetch_assoc($query)){
                $rows[]=$results;
                
                //echo(",");
            }
            echo json_encode($rows);
    
    }

    function selectPackage($email,$code,$packageID){
        global $conn;
     $sql="SELECT * FROM package_selection WHERE EMAIL ='".$email."'";
        $results = $conn->query($sql);
        if($results->num_rows > 0){
            echo "Package Already selected";
        }
        else
        {
            // VALUES('',$email,$code,$packageID)"
        $sql = "INSERT INTO package_selection(EMAIL,CODE_NAME,PACKAGE_NAME) VALUES('".$email."','".$code."','".$packageID."')";

         if ($conn->query($sql)) {
            echo "Package Selected successfully";
        }else{
            // echo $code;
        echo "Failed to select package";
        }
        // echo $clientId.'-'.$codeID.'-'.$packageID;

    }
}


function instr_report($report,$instr_id,$clientID,$rating){
    global $conn;
 $sql ="SELECT * FROM package_selection WHERE rating ='".$rating."'";
    $results = $conn->query($sql);
    if($results->num_rows > 0){
        echo "lerner Already selected";
    }
    else
    {
    $sql = "INSERT INTO reports (REPORT,INSTRUCTOR_ID,CLIENT_ID,rating) VALUES('$report','$instr_id','$clientID','$rating')";
     if ($conn->query($sql)) {
        echo "rated";
    }else{
    echo "Failed";
    }
    // echo $clientId.'-'.$codeID.'-'.$packageID;

}
}

function client_balace($CLIENT_ID,$BOOKING_ID,$LESSON_BALANCE){
    global $conn;
 $sql ="SELECT * FROM client_balance WHERE CLIENT_ID ='".$CLIENT_ID."'";
    $results = $conn->query($sql);
    if($results->num_rows > 0){
        echo "lerner Already selected";
    }
    else
    {
    echo "Failed";
    }
    // echo $clientId.'-'.$codeID.'-'.$packageID;

}

function book_a_lesson($client){
    global $conn;
    $sql ="INSERT INTO booking values(booking.BOOKING_ID,booking.CLIENT_ID,booking.BOOKING_DATE,booking.LESSON_DATE,booking.LESSON_TIME where CLIENT_ID='.$client.'";
    $results = $conn->query($sql);
    if($results==true){
        $sql= "UPDATE client_balance SET LESSON_BALANCE= package.NO_OF_LESSON-1 WHERE CLIENT_ID='.$client.'";
    }
    else
    {
    echo "Failed";
    }

}

function C_report($ClientId,$report){
    global $conn;
 $sql ="SELECT * FROM c_report WHERE ClientId ='".$ClientId."'";
    $results = $conn->query($sql);
    if($results->num_rows > 0){
        echo "already reported";
    }
    else
    {
    $sql = "INSERT INTO c_report (CLIENT_ID,REPORT) VALUES('$ClientId','$report')";
     if ($conn->query($sql)) {
        echo "Successfully reported";
    }else{
    echo "Failed";
    }
    // echo $clientId.'-'.$codeID.'-'.$packageID;

}
}


    // FUNCTION GLOBALs($user){
    //     GLOBAL $username;
    //     $username= $user;
    //     echo "you login as".$username;
    // }
   
}




    
?>
 





























