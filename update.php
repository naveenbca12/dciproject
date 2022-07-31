
<?php
  $conn = mysqli_connect("localhost","root","","dciproject"); 
  if($conn==false)
  {
      die('could not connect:'.mysqli_error());
  }
  $pid=$_GET['pid'];
  $query ="select p_id,p_nm, p_quantity, p_price, file FROM product where p_id=$pid";
  $result = mysqli_query($conn, $query);
  $numrow = mysqli_num_rows($result);
  if ($numrow ==1 ) {
  $row= mysqli_fetch_assoc($result);
  
?>
    <html>
    <head>
        <title>update</title>
        <link rel="stylesheet" href="add.css">
    </head>
    <body>
    <form name="myform2"  action="http://localhost/Dciproject/insert.php" method="post" enctype="multipart/form-data" > 
        <input type="text" name="p_id" value="<?=$pid?>"/>      
     <table class="dbresult">
        <thead>
            <tr>
                <th colspan="2" height="75">UPDATE PRODUCT</th>
            </tr>
      </thead>
       <tbody>
            <tr><td>PRODUCT NAME</td>
            <td><input type="text" name="p_nm" class="p_nm" required  value="<?=$row['p_nm']?>"/></td></tr>

            <tr><td>QUANTITY</td>
            <td><input type="number" name="p_quantity" class="p_quantity"  required value="<?=$row['p_quantity']?>"/></tr>

            <tr><td>PRICE</td>
            <td><input type="number" name="p_price"  class="p_price" required  value="<?=$row['p_price']?>"/></tr>

            <tr><td>IMAGE</td>
            <td><input type="file" name="file"  accept="image/*" class="file" id="file" required  value="<?=$row['file']?>"/></tr>

            <tr><td colspan="2" style="text-align: center;" >
            <input type="submit" name="submit"  class="submit" id="button" value="Update"/>
            </td></tr>
            <form action="http://localhost/Dciproject/dbcon.php">
                <tr><td colspan="2"><a href="http://localhost/Dciproject/dbcon.php">view record</a>
            </form>
          
        
        
        </tbody></table></form>
</html>
<?php } 
else{
    echo'record not found';
}?>