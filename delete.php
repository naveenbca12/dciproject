<?php
/*$conn = mysqli_connect("localhost","root","","dciproject"); 
if($conn==false)
{
    die('could not connect:'.mysqli_error());
}
else
{
echo "connected";
//$query= "INSERT INTO product(p_nm,p_quantity,p_price,file) VALUES('$p_nm','$p_quantity','$p_price','$file')";*/
if(isset($_GET['pid'])){
    $p_id=$_GET['pid'];
    echo"$p_id";
    
    $conn = mysqli_connect("localhost","root","","dciproject"); 
    if($conn==false)
       {
         die('could not connect:'.mysqli_error());
        }

      $query="DELETE FROM product where p_id='$p_id'";
      $result = mysqli_query($conn, $query);
       if($result){
          header("location:dbcon.php");
        }
         else{
          echo"error ";
         }

}
?>