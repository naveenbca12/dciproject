<?php
$uname1 = $_POST['uname1'];//add panna pora variables aaa declare panrom
$email1 = $_POST['email1'];
$upswd1 = $_POST['upswd1'];


    $conn = mysqli_connect("localhost","root","","dciproject"); 
    if($conn==false)
    {
        die('could not connect:'.mysqli_error());
    }
else
{
    echo "connected";
    $query= "INSERT INTO registertable(uname1,email1,upswd1) VALUES('$uname1','$email1','$upswd1')";
    //$query='INSERT INTO register(uname1,email1,upswd1,) VALUES("naveen","naveen@gmail.com","naveen")';
    $result = mysqli_query($conn, $query);
    echo "inserted";
    mysqli_close($conn); 
    
}
?>
