<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=mysqli_real_escape_string($db,$_POST['username']);
        $pass=mysqli_real_escape_string($db,$_POST['password']);
    $sql="SELECT name from incharge where name='$name' and password='$pass' ";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['login_user']=$name;
        header("location:InchargeHome.php");
    }
    else{
        $message="Your username or password is incorrect";
        echo "<script type='text/javascript'>alert('$message');
        window.location.replace(\"./Inchargelogin.php\");</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incharge Login</title>
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
</head>
<body style="background:url(NMIT_4.JPG);background-size: cover;">
    <div class="loginbox">
<h1>Incharge Login</h1>
<form action="" method="POST">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username">
<p>Password</p>
<input type="password" name="password" placeholder="Enter password">
<p style="font-size:14px;font-family:serif;float:right;">Not an Incharge?</p>
<p style="font-size:14px;font-family:serif;float:right;">Login as <a href="adminlogin.php">Admin</a> or <a href="StudentLogin.php">Student</a> instead.<p>

<input type="submit" name="" value="Login">


</form>
</div>
</body>
</html>