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
    <link rel="stylesheet" href="compdetails.css">
</head>
<body style="background-color:grey;">
    <div >
    <div >
        <h1>Company Details</h1>
        <table  >
       <br >
        <tr >
            <th>Company Name</th>
            <th>Description</th>
            
            </tr>
        
        <?php
        $con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_placement');

            
        $q = "SELECT * from company";
        
        $query = mysqli_query($con,$q);    
        
        while($res = mysqli_fetch_array($query)){

        
        ?>
        
        
         <tr>
            <th><?php echo $res['name'] ?></th>
            <th><?php echo $res['description']?></th>
            
            
            
            
            
            

            
            
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