<?php
include("config.php");
session_start();
include("function.php");
initiate();
if(isset($_POST['sub']))
    {
        $name=mysqli_real_escape_string($db,$_POST['name']);
        $eligibility=mysqli_real_escape_string($db,$_POST['eligibility']);
        $drive_date=mysqli_real_escape_string($db,$_POST['drive_date']);
        $description=mysqli_real_escape_string($db,$_POST['description']);
        $website=mysqli_real_escape_string($db,$_POST['website']);
        if(isset($_POST['check']))
        $chk=implode(',', $_POST['check']);
        $sql= "INSERT into company(name,eligibility,drive_date,branch,description,website) values('$name','$eligibility','$drive_date','$chk','$description','$website')";
        $rr = mysqli_query($db, $sql);
        if($rr==1){
         $message = "Company Successfully Added";
           echo "<script>alert('$message');
           window.location.replace(\"adminhome.php\");</script>";
       } else{
           $message = "Not Added";
           echo "<script>alert('$message');
           window.location.replace(\"company.php\");</script>";
       }
    }
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="company.css">
    
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
    <script src="company.js"></script>
    <title>Add Company</title>
</head>
<body style="background:url(NMIT_7.jpg);background-size: cover;"
 
>
<nav style="background: color #e27d60;;font-family: Verdana;">
           <img src="NMITlogo.PNG" width="100" height="80">
            <ul style="margin:0;padding:0;">
                <li><a href="adminhome.php">Home</a></li>
                <li><a href="company.php">Add Company</a></li>
                <li><a href="BranchIncharge.php">Add Incharge</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>       
    

    </nav>
<a  href="adminhome.php"><button style=" margin-left: 5px;margin-top:20px;padding:10px;background-color:lightgrey;">Back to home</button></a>
    <div class="company">
        <h1>Add Company Details</h1>
        <form name="company" action="" method="POST" onsubmit="return validatecompany()">
            <p>Company Name</p>
            <input type="text" name="name" placeholder="Enter Company Name">
            <p>Eligibility</p>
            
            <input type="number" name="eligibility" placeholder="If no eligibility,type 0." step="0.01">
            <p>Drive Date</p>
            <input type="date" name="drive_date" placeholder="">

            <p>Enter The Branches</p>
            <input type="checkbox" name="check[]" value="Computer Science">Computer Science<br>
            <input type="checkbox" name="check[]" value="Information Science">Information Science<br>
            <input type="checkbox" name="check[]" value="Electronics & Communication">Electronics and Communication<br>
            <input type="checkbox" name="check[]" value="Civil">Civil<br>
            <input type="checkbox" name="check[]" value="Mechanical">Mechanical<br>
            <p>Website</p>
            <input type="text" name="website" placeholder="">
            <p>Company Description</p>
            <textarea rows="10" cols="76" name="description"></textarea><br><br><br>
            <input type="submit" name="sub" value="Submit" style="margin-left: 44%;"><br><br>

        </form>
    </div>
    
</body>
</html>