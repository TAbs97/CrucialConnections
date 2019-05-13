<?php
    session_start();
    $DB = mysqli_connect("localhost","root","authentication");
    if(isset($_POST['Book']))
    {
        $
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style></style>
    <title>Document</title>
    <link rel="stylesheet"  type=" text/css" href="css/book.css">
</head>
<body>
    <div class="Booking" >
        <img src="img/DriveBox.png" alt="login icon" class="avatar" width="100">
        <h1>Booking</h1>
        <form>
           <table>

                <tr>
                        <td class="name">
                                Code Type 
                        </td>
                        <td>
                            <select class="select">
                                <option value="">Please select code</option>
                                <option value="1">8</option>
                                <option value="2">10</option>
                                <option value="3">14</option>
                              </select>
                             
                        </td>
                </tr>
                <tr>
                    <td class="name">
                            Lessons 
                    </td>
                    <td>
                        <select class="select">
                            <option value="">Please select lessons package</option>
                            <option value="1">INDIVIDUAL LESSON</option>
                            <option value="2">FULL PACKAGE</option>
                            <option value="3">HALF COURSE</option>  
                            <option value="4">BRUSH UP</option>
                            <option value="5">SUPPER BRUSH UP</option>                       
                          </select>
                          
                    </td>
                <tr>
                        <td class="name">
                                Time 
                        </td>
                        <td>
                            <select class="select"> 
                                <option value="">Please select time</option>
                                <option value="1">07:00</option>
                                <option value="2">10:00</option>
                                <option value="3">11:30</option>  
                                <option value="4">13:00</option>
                                <option value="5">15:00</option>                       
                              </select>
    
                        </td>
                </tr>
                    <tr>
                        <td class="name">
                                Date 
                        </td>
                        <td>
                                    <input type="date" name="">                     
                        </td>
                </tr>
            <tr>
                    <td>
                            <input type="button" id="book" type="submit" onclick="getdata()" name="Book" value="Book">
                    </td>
            </tr>
           </table>
            
        </form>
    </div>
</body> 
</html>