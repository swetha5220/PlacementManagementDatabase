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
    <link rel="stylesheet" href="viewcompany.css">
</head>
 <body style="background-color:grey;">
    <div >
    <div >
        <h1>Company List</h1>
        <table  >
       <br >
        <tr >
            <th>Company Name</th>
            <th>Drive Date</th>
            <th>Min CGPA</th>
            <th>Branches</th>
            <th>USN of Registered students</th>
           
            <th>Registration Status</th>
            
            </tr>
        
        <?php
        $con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_placement');

            
        $q = "SELECT * from company";
        
        $query = mysqli_query($con,$q);    
        
        while($res = mysqli_fetch_array($query)){

        
        ?>
        
        
         <tr>
            <th><?php echo $res['name']?></th>
            <th><?php echo $res['drive_date']?></th>
            <th><?php echo $res['eligibility'] ?></th>
            <th><?php echo $res['branch']?></th>
            
            <th>
            <?php
                // $arr="";
                $reg="SELECT * from register";
                $new=mysqli_query($con,$reg);
                while($res1=mysqli_fetch_array($new)){
                    if($res['company_id']==$res1['company_id'])
                    {
                        $arr=$res1['usn'];
                        echo $arr." ";
                     }
                }
                
                // echo implode(",",$arr);
                ?>
                </th>
                <th>
            <?php
            $count=0;
                $reg="SELECT * from register";
                $new=mysqli_query($con,$reg);
                while($res1=mysqli_fetch_array($new)){
                    if($res['company_id']==$res1['company_id'])
                    {
                        $count++;
                    }
                }
                echo $count;
                ?>
                </th>
            
            
            

            
            
        </tr>
        <?php
            
        }
            
        ?>    
    </table>    
        
        <a  href="adminhome.php"><button>Back to home</button></a>
    </div>    
        
    </div>
    
</body>
</html>