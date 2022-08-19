<?php
include("config.php");
session_start();
include("function.php");
initiate();
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=mysqli_real_escape_string($db,$_POST['name']);
        $usn=mysqli_real_escape_string($db,$_POST['usn']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $pass=mysqli_real_escape_string($db,$_POST['pass']);
        $dob=mysqli_real_escape_string($db,$_POST['dob']);
        $address=mysqli_real_escape_string($db,$_POST['address']);
        $state=mysqli_real_escape_string($db,$_POST['state']);
        $branch=mysqli_real_escape_string($db,$_POST['branch']);
        $gender=mysqli_real_escape_string($db,$_POST['gender']);
        $tenth=mysqli_real_escape_string($db,$_POST['tenth']);
        $twelfth=mysqli_real_escape_string($db,$_POST['twelfth']);
        $BE=mysqli_real_escape_string($db,$_POST['BE']);
       $sql= "INSERT into student values('$name','$usn','$email','$pass','$dob','$address','$state','$branch','$gender','$tenth','$twelfth','$BE')";
       $rr = mysqli_query($db, $sql);
       if($rr==1){
        $message = "Student Successfully Added";
          echo "<script>alert('$message');
          window.location.replace(\"inchargeHome.php\");</script>";
      } else{
          $message = "Not Added";
          echo "<script>alert('$message');
          window.location.replace(\"AddStudent.php\");</script>";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link rel="stylesheet" href="AddStudent.css">
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
    <script src="AddStudent.js"></script>
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
    <form name="student" action="" method="POST" onsubmit="return AddStudent()">
        <h1>Add Student Details</h1>
    <p>Student Name</p>
    <input type="text" name="name" placeholder="Name"><br>
    <p>USN</p>
    <input type="text" name="usn" placeholder="usn"><br>
    <p>Email</p>
    <input type="text" name="email" placeholder=" Email "><br>
    <p>Password</p>
    <input type="password" name="pass"><br>
    <p>DOB</p>
    <input type="date" name="dob" placeholder="yyyy/mm/dd"><br>
    <p>Address</p>
    <textarea rows="4" cols="45" name="address"></textarea><br>
    <p>State</p>
    <input type="text" name="state" placeholder="state"><br>
    <p>Branch</p>
    <select name="branch">
        <option value="Computer Science" >Computer Science</option>
        <option value="Information Science" >Information Science</option>
        <option value="Electronics and communication" >Electronics and Communication</option>
        <option value="civil" >Civil</option>
        <option value="mechanical" >Mechanical</option>
    </select>

    <p>Gender</p>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other<br>
    <p>Marks</p>
    <p>10th:</p>
    <input type="number" name="tenth" placeholder="Enter marks in CGPA" step="0.1"><br>
    <p>12th:</p>
    <input type="number" name="twelfth" placeholder="Enter marks in CGPA"  step="0.1"><br>
    <p>BE:</p>
    <input type="number" name="BE" placeholder="Enter marks in CGPA"  step="0.1"><br><br><br>
    <input type="submit" value="Submit" >
</form>
</div>

</body>
</html>