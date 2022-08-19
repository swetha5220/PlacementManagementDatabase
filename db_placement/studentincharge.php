<?php
  
session_start();
include("function.php");
initiate();
$var=$_SESSION['login_user'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Student</title>
    <link rel="stylesheet" href="studentincharge.css">
</head>
<body style="background-color:grey;">
    <div >
    <div >
        <h1>Student Details</h1>
        <table  >
       <br >
        <tr >
            <th>Name</th>
            <th>USN</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Address</th>
            <th>State</th>
            <th>Branch</th>
            <th>Gender</th>
            <th>10th</th>
            <th>12th</th>
            <th>BE</th>
            </tr>
        
        <?php
        $con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_placement');

        //  $v=  "SELECT branch from incharge where name=$var";
         
        $q = "SELECT * from student where branch =(SELECT branch from incharge where name ='{$var}')";
        
        $query = mysqli_query($con,$q);    
        
        while($res = mysqli_fetch_array($query)){

        
        ?>
        
        
         <tr>
            <th><?php echo $res['name']?></th>
            <th><?php echo $res['usn']?></th>
            <th><?php echo $res['email'] ?></th>
            <th><?php echo $res['DOB']?></th>
            <th><?php echo $res['address']?></th>
            <th><?php echo $res['state']?></th>
            <th><?php echo $res['branch']?></th>
            <th><?php echo $res['gender'] ?></th>
            <th><?php echo $res['10th']?></th>
            <th><?php echo $res['12th']?></th>
            <th><?php echo $res['BE']?></th>
            
            

            
            
        </tr>
        <?php
            
        }
            
        ?>    
    </table>    
        
        <a  href="inchargehome.php"><button>Back to home</button></a>
    </div>    
        
    </div>
    
</body>
</html>