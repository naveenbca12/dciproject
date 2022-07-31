<?php
session_start();
if(isset($_POST['login']))
{
$uname1= $_POST['uname1'];
$upswd1= $_POST['upswd1'];
}
 // Create connection
$conn = mysqli_connect("localhost","root","","dciproject");
 
$query = 'select * from registertable where uname1="'.$uname1.'" and upswd1="'.$upswd1.'" limit 1';
 //$query = 'select * from register where uname1="'.$uname.'"';
$result= mysqli_query($conn,$query);
if(!$result)
   {   
   die("query failed".mysqli_error());
    }
     else
        {
           
          $row = mysqli_num_rows($result);
            if($row == 1)
            {
              $_SESSION['uname1']=$uname1; 
             header('location:loginsuccess.php');
              }  
              else{
                header('location: loginpage.php?message=sorry your username and password is invalid');
              }

}
  mysqli_close($conn); 

 ?>                                                                                         