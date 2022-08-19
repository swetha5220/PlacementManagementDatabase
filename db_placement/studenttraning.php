<?php
  
session_start();
include("function.php");
initiate();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Company</title>
    <link rel="stylesheet" href="viewtraining.css">
</head>
<body style="background-color:grey;">
    <div >
    <div >
        <h1>Training Details</h1>
        <table  >
       <br >
        <tr >
            <th>Training course</th>
            <th>Faculty Name</th>
            <th>Scheduled Date</th>
            <th>Time</th>
            <th>Venue</th>
            </tr>
        
        <?php
        $con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_placement');

            
        $q = "SELECT * from training";
        
        $query = mysqli_query($con,$q);    
        
        while($res = mysqli_fetch_array($query)){

        
        ?>
        
        
        <tr>
            <th><?php echo $res['training_course']?></th>
            <th><?php echo $res['faculty_name']?></th>
            <th><?php echo $res['schedule'] ?></th>
            <th><?php echo $res['time']?></th>
            <th><?php echo $res['venue']?></th>
            
            

            
            
        </tr>
        <?php
            
        }
            
        ?>    
    </table>    
        
        <a  href="StudentHome.php"><button>Back to home</button></a>
    </div>    
        
    </div>
    
</body>
</html>