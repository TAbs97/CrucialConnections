<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"test") or die("failed to connect select db");;


if (isset($_POST['submit']))  {
   $username=$_POST['$username1'];
   $password=$_POST['$password1'];
   $sql=mysqli_query("select * from users where U_NAME='$username' AND U_PASSWORD='$password'");

	if ($row=mysqli_fetch_array($sql)){
			if($password==$row['U_PASSWORD']){
		      header("Location:book.html");	
			  exit();
			}
    Else
		echo" invalid password";			
	}
	
	Else
		echo" invalid username";



}
?>