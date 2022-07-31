<?php

if(isset($_POST['submit'])  &&  $_POST['submit']=='Insert'){
$p_nm = $_POST['p_nm'];//add panna pora variables aaa declare panrom
$p_quantity = $_POST['p_quantity'];
$p_price = $_POST['p_price'];
$path="C:/xampp/htdocs/Dciproject/files/";
$file=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($temp,$path.$file);



$conn = mysqli_connect("localhost","root","","dciproject"); 
if($conn==false)
    {
    die('could not connect:'.mysqli_error());
    }
$query= "INSERT INTO product(p_nm,p_quantity,p_price,file) VALUES('$p_nm','$p_quantity','$p_price','$file')";
$result = mysqli_query($conn, $query);

if($result){
    header('location:formdata.php');
}else{
    echo'error';
}}
elseif(isset($_POST['submit'])  &&  $_POST['submit']=='Update')
43{
    $p_id=$_GET['p_id'];
    $p_nm = $_POST['p_nm'];//add panna pora variables aaa declare panrom
$p_quantity = $_POST['p_quantity'];
$p_price = $_POST['p_price'];
$path="C:/xampp/htdocs/Dciproject/files/";
$file=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($temp,$path.$file);

    $qry="UPDATE product set p_nm='$p_nm', p_quantity='$p_quantity', p_price='$p_price,file='$file' where p_id='$pid'";
    $result= mysqli_query($conn,$qry);
    if($result)
    header('location:dbcon.php');
}else{

    echo'error while insert record';
}



/*else
{
echo "connected";
$query= "INSERT INTO product(p_nm,p_quantity,p_price,file) VALUES('$p_nm','$p_quantity','$p_price','$file')";
$result = mysqli_query($conn, $query);
echo "inserted";
mysqli_close($conn); 

}
?>*/
