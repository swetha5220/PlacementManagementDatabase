<?php
include("config.php");
session_start();
include("function.php");
initiate();
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $branch=mysqli_real_escape_string($db,$_POST['branch']);
        $name=mysqli_real_escape_string($db,$_POST['name']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $pass=mysqli_real_escape_string($db,$_POST['pass']);
       $sql= "INSERT into incharge (branch,name,email,password) values('$branch','$name','$email','$pass')";
       $rr = mysqli_query($db, $sql);
       if($rr==1){
        $message = "Incharge Added";
          echo "<script>alert('$message');
          window.location.replace(\"adminhome.php\");</script>";
      } else{
          $message = "Can't add aother incharge to same branch";
          echo "<script>alert('$message');
          window.location.replace(\"BranchIncharge.php\");</script>";
      }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Branch Incharge</title>
    <link rel="stylesheet" href="BranchIncharge.css">
    <style>
        



nav{
    margin:0;padding:0;
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
    <script src="BranchIncharge.js"></script>
</head>
<body style="background:url(NMIT_7.jpg);background-size: cover;">
<nav style="font-family:verdana;">
           <img src="NMITlogo.png" width="100" height="80">
            <ul style="margin:0px;padding:0px;">
                <li><a href="adminhome.php">Home</a></li>
                <li><a href="company.php">Add Company</a></li>
                <li><a href="BranchIncharge.php">Add Incharge</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>       
    

    </nav>
<a  href="adminhome.php"><button style=" margin-left: 5px;margin-top:20px;padding:10px;background-color:lightgrey;">Back to home</button></a>
    <div class="main" style="margin-top:50px;">
    <form name="incharge" action="" method="POST" onsubmit="return validateIncharge()">
        <h1>Add Incharge Details</h1>
    <p>Enter The Branch</p>
    <select name="branch">
        <option value="Computer Science" >Computer Science</option>
        <option value="Information Science" >Information Science</option>
        <option value="Electronics and communication" >Electronics and Communication</option>
        <option value="civil" >Civil</option>
        <option value="mechanical" >Mechanical</option>
    </select>

    <p>Incharge Name</p>
    <input type="text" name="name" placeholder="Branch Incharge"><br>
    <p>Email</p>
    <input type="text" name="email" placeholder=" Email Id "><br>
    <p>Password</p>
    <input type="password" name="pass" placeholder=""><br><br>
    <input type="submit" value="Submit" >
    
</form>
</div>


</body>
</html>