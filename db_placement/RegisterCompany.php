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
    <title>View Company</title>
    <link rel="stylesheet" href="RegisterCompany.css">
   
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
            <th>Register</th>
            </tr>
        
        <?php
        $con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'db_placement');

            
        $q = "SELECT * from company";
//         $ten="SELECT 10th from student where name='{$var}'";
//         // $ten1=mysqli_query($con,$ten);
//  $twelve="SELECT 12th from student where name='{$var}'";
//  $BE="SELECT BE from student where name='{$var}'";
//  $branch="SELECT branch from student where name='{$var}'";
  $usn="SELECT usn from student where name='{$var}'";
  $usn_query = mysqli_query($con,$usn); 
  $my=mysqli_fetch_array($usn_query)  ;
        $query = mysqli_query($con,$q);    
        
        while($res = mysqli_fetch_array($query)){
            
        
        ?>
        
        
         <tr>
         <form action="" method="post">
        
            <th><input type="text" value="<?php echo $res['name']?>" name="c_name" style="font-size:16px;background-color:lightgrey" readonly></th>
            <th><?php echo $res['drive_date']?></th>
            <th><?php echo $res['eligibility'] ?></th>
            <th><?php echo $res['branch']?></th>
            
    
            <th><input type="submit" value="Register" name="myreg" style="padding:10px;background-color:lightgrey;" ></th></form>
            
            
            

            
            
        </tr>
        <?php
            
        }
            
        ?>    
    </table>  
    <?php
 $con = mysqli_connect('localhost','root');

 mysqli_select_db($con, 'db_placement');
 
 if(isset($_POST['myreg'])){
     $b= $_POST['c_name'];
     $comp_eleg="SELECT eligibility,branch from company where name='{$b}'";
     $stud_eleg = "SELECT 10th,12th,BE,branch from STUDENT where name='{$var}'";
     $cd = mysqli_query($con, $comp_eleg);
     $sd = mysqli_query($con, $stud_eleg);
    $arr1 = mysqli_fetch_array($cd);
    $arr2 = mysqli_fetch_array($sd);
    $comp_el=$arr1['eligibility'];
    $ten_el=$arr2['10th'];
    $twe_el=$arr2['12th'];
    $be_el=$arr2['BE'];
    // echo $be_el;
    // echo $comp_el;
    // $br1=$arr1['branch'];
    // $br2=$arr2['branch'];
    // echo $comp_el;
    // echo $ten_el;
    // echo $twe_el;
    // echo $be_el;

    // print_r($arr1);
    // print_r($arr2);
     $arr3[] = $arr1['branch'];
    // for($i=0;$i<sizeof($arr3);$i++){
    //     if($arr2['branch']==$arr3[$i])
    //     echo "match";
    //     else
    //     echo "no match";
    // }
     $flag=0;
    $str1=$arr2['branch'];
    foreach($arr3 as $row)
    {
        $str=$row;
    }
    $str2=explode(",",$str);
    foreach($str2 as $row1)
    {
        if($row1==$str1)
        $flag=1;
        break;
    }
    $f= $my['usn'];
    if($flag==1){

    
 $sql="SELECT * from company where name='{$b}' and $ten_el>=$comp_el and $twe_el>=$comp_el and $be_el>=$comp_el";

                      $rr = mysqli_query($con, $sql);
                      $a=mysqli_fetch_array($rr);
                      $count=mysqli_num_rows($rr);
                      $f1=$a['company_id'];
                    //   echo $f1;
                    //echo $count;
                      if($count==1){
                          $one="INSERT into register(usn,company_id) values('$f','$f1')";
                          mysqli_query($con, $one);
                       $message = "Student Registered successfully";
                       echo "<script type='text/javascript'>alert('$message');
                         window.location.replace(\"RegisterCompany.php\");</script>";
                     } else{
                         $mes = "You are not eligible";
                          echo "<script type='text/javascript'>alert('$mes');
                         window.location.replace(\"RegisterCompany.php\");</script>";
                     }
                    }
                    
                    else
                    {
                        $message = "You are not eligible";
                         echo "<script>alert('$message');
                         window.location.replace(\"RegisterCompany.php\");</script>";

                    }
            }
        ?>  
        
        <a  href="StudentHome.php"><button style="margin-left: 45%;margin-top:20px;padding:10px;background-color:lightgrey;">Back to home</button></a>
    </div>    
        
    </div>
    
</body>
</html>