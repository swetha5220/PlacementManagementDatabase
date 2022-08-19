<?php
include("config.php");
session_start();
include("function.php");
initiate();
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $course=mysqli_real_escape_string($db,$_POST['course']);
        $faculty=mysqli_real_escape_string($db,$_POST['faculty']);
        $schedule=mysqli_real_escape_string($db,$_POST['schedule']);
        
        $time=mysqli_real_escape_string($db,$_POST['timings']);
        $venue=mysqli_real_escape_string($db,$_POST['venue']);
       
       $sql= "INSERT into training(training_course,faculty_name,schedule,time,venue) values('$course','$faculty','$schedule','$time','$venue')";
       $rr = mysqli_query($db, $sql);
       if($rr==1){
        $message = "Training Successfully Added";
          echo "<script>alert('$message');
          window.location.replace(\"inchargeHome.php\");</script>";
      } else{
          $message = "Not Added";
          echo "<script>alert('$message');
          window.location.replace(\"AddTraining.php\");</script>";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Traning</title>
    <link rel="stylesheet" href="AddTraining.css">
    <style>
  

nav{
   
    width:100%;
    height:80px;
    
    line-height:80px;
}
nav ul{
    float: right;
    margin-right: 30px;
}
nav img{
    padding: 0 0 0 50px ;
}
nav ul li{
    list-style-type: none;
    display:inline-block;
    transition:0.8s all;
}
nav ul li:hover{
    background-color: #f39d1a;
}
nav ul li a{
    text-decoration: none;
    color:white;
    padding:30px;

}

    </style>
    <script src="AddTraining.js"></script>
</head>

<body style="background:url(NMIT_7.jpg);background-size: cover;">
<nav style="font-family: Verdana;">
           <img src="NMITlogo.png" width="100" height="80">
            <ul style="margin:0;padding:0;">
                <li><a href="InchargeHome.php">Home</a></li>
                <li><a href="AddStudent.php">Add Student</a></li>
                <li><a href="AddTraining.php">Add Training</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>       
    

    </nav>
<a  href="InchargeHome.php"><button style=" margin-left: 5px;margin-top:20px;padding:10px;background-color:lightgrey;">Back to home</button></a>
    <div class="main">
    <form name="training" action="" method="POST" onsubmit="return validateTraining()">
        <h1>Add Training Details</h1>
    <p>Course</p>
    <select name="course">
        <option value="Quantitative" >Quantitative</option>
        <option value="Logical Reasoning" >Logical Reasoning</option>
        <option value="Verbal Ability" >Verbal Ability</option>
       
    </select>
    <p>Faculty Name</p>
    <input type="text" name="faculty" placeholder=""><br>
    <p>Scheduled On</p>
    <input type="date" name="schedule" placeholder=""><br>
    
    <p>Timings</p>
    <input type="text" name="timings" placeholder=""><br>
    <p>Venue</p>
    <input type="text" name="venue" placeholder=""><br>
   
    <br>
    
    <input type="submit" value="Submit" >
</form>
</div>
</body>
</html>