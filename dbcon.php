<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
    <style>
    .dbresult, .dbresult td, .dbresult th
   {
    border:1px solid #8665f7;
    border-collapse: collapse;
    padding: 15px;    
    width: 300;
    font-size:20;    
   }

.h3	{
			text-align: center;
		}
.dbresult th{
    color: white;
    background-color: #8665f7;
}
.dbresult td{
    color: green;
}
.dbresult{
    width: 400px;
    margin :auto;}
    </style>
</head>
<body>
    
</body>
</html>




<?php
$conn = mysqli_connect("localhost","root","","dciproject"); 
if($conn==false)
{
    die('could not connect:'.mysqli_error());
}
else{
$query ="select p_id,p_nm, p_quantity, p_price, file FROM product";
$result = mysqli_query($conn, $query);
$numrow = mysqli_num_rows($result);
if($numrow > 0)
{
echo  '<h3>TOTAL RECORDS:'.$numrow;
echo '<table class="dbresult">';
echo '<tr>';
echo '<th>Delete</th>';
echo '<th>update</th>';
echo '<th>p_id</th>';
echo '<th>p_nm</th>';
echo '<th>p_quantity</th>';
echo '<th>p_price</th>';
echo '<th>file</th>';

while ($row = mysqli_fetch_array($result))//result la ullathu aduthu aduthu print aaga
    {
        $p_id=$row['p_id'];
        $file="http://localhost/Dciproject/files/".$row[4];
    echo "<tr>"."<td><a href='delete.php?pid=$row[0] '>delete</a><td>"."<a href='update.php?pid=$row[0]'>update</a><td>".$row['p_id']."<td>".$row['p_nm'].
    "<td>".$row['p_quantity']."<td>".$row['p_price']."<td><img width='150'height='150' src=".$file.">";
    
    }
    echo "</table>";
    mysqli_close($conn);
}
}
?>
    