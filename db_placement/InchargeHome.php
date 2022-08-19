<?php
session_start();
include("function.php");
initiate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incharge Home</title>
    <style>
.card {
  margin-left:120px;
  margin-top:20px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
</style>
    <link rel="stylesheet" href="inchargehome.css">
</head>
<body>
        <nav style="background-color:lightskyblue;">
                       <img src="NMITlogo.PNG" width="100" height="80">
                        <ul>
                            <li><a href="inchargehome.php">Home</a></li>
                            <li><a href="AddStudent.php">Add Student</a></li>
                            <li><a href="AddTraining.php">Add Training</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>       
            
            
                </nav>
                <p style="text-align:center;font-family:serif;margin-top:60px;margin-bottom:60px;font-weight:bold;font-size:40px;">Welcome to NMIT placement</p>
    <section>
  <img class="mySlides" src="NMIT_5.jpg"
  style="width:100%; height:600px; " >
  <img class="mySlides" src="NMIT_2.jpg"
  style="width:100%; height:600px;">
  <img class="mySlides" src="NMIT_7.jpg"
  style="width:100%; height:600px; " >
  <section  style="width:100%;">
  <h2 style="text-align:center;margin-top:15px;">ABOUT US</h2>
  <p style="margin-left:15%;margin-right:15%;font-size:20px;padding:15px;font-family:serif;">The success behind our placement program can be traced all the way to our mission and vision which collectively promotes the overall success of students, staff and the college. The Industries in India and abroad, seek to recruit the best brains entering the Industry from NMIT. This ensures that students of NMIT pick the right kind of work that they want to do. Major recruitment drives are conducted from September to April of every year. Reputed Companies have been participating in the Placement Drive conducted in the college every year.</p>
  <br><p style="margin-left:40%;font-family:serif;"> 2018-19 - CTC Rs 21 Lakhs Per Annum</p>

<p style="margin-left:40%;font-family:serif;">2017-18 - CTC Rs 21 Lakhs Per Annum</p>

<p style="margin-left:40%;font-family:serif;">2016-17 - CTC Rs 21 Lakhs Per Annum</p>

<p style="margin-left:40%;font-family:serif;">2015-16 - CTC Rs. 9 Lakhs Per Annum</p>

<p style="margin-left:40%;font-family:serif;">2014-15 - CTC Rs 11 Lakhs per Annum</p><br><br>
</section>
<section style="background-color:lightblue;">
                <table>
        <tr><td>
        <div class="card" style="width:350px;height:300px;">
  <img src="stud.jpg" alt="Avatar"  style="width:350px;height:230px;">
  <div class="container">
    
    
    <a href="studentincharge.php"><button style="width:100%;padding:19px 40px;font-size:20px;background-color:lightcyan;">Student Details</button></a>
  </div>
</div></td>
<td>
<div class="card" style="width:350px;height:300px;">
  <img src="training.png" alt="Avatar" style="width:350px;height:230px;">
  <div class="container">
   
    
  <a href="inchargetraining.php"><button style="width:100%;padding:19px 40px;font-size:20px;background-color:lightcyan;">Training Details</button></a>
  </div>
</div>
</td>
<td>
<div class="card" style="width:350px;height:300px;">
  <img src="comp.jpg" alt="Avatar" style="width:350px;height:230px;">
  <div class="container">
   
    
  <a href="inchargecompany.php"><button style="width:100%;padding:19px 40px;font-size:20px;background-color:lightcyan;">Company Details</button></a>
  </div>
</div>
</td>
</tr>
</table>
<br>
</section>
<footer style="width=100%;height:100px;background-color:black;color:white">
  <p style="margin-left:45%;margin-right:30px;"><br>&copyNMIT-Placement.All rights reserved.
  </p>
  <p style="margin-left:50%;margin-right:30px;"><br>Privacy Policies.
  </p>
</footer>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
                
</body>
</html>
