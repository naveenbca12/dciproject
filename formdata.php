<?php

?>
    <html>
    <head>
        <title>INSERT</title>
        <link rel="stylesheet" href="add.css">
    </head>
    <body>
    <form name="myform2"  action="http://localhost/Dciproject/insert.php" method="post" enctype="multipart/form-data" >       
     <table class="dbresult">
        <thead>
            <tr>
                <th colspan="2" height="75">PRODUCT ENTRY</th>
            </tr>
      </thead>
       <tbody>
            <tr><td>PRODUCT NAME</td>
            <td><input type="text" name="p_nm" class="p_nm" required/></td></tr>

            <tr><td>QUANTITY</td>
            <td><input type="number" name="p_quantity" class="p_quantity" required/></tr>

            <tr><td>PRICE</td>
            <td><input type="number" name="p_price"  class="p_price" required/></tr>

            <tr><td>IMAGE</td>
            <td><input type="file" name="file"  accept="image/*" class="file" id="file" required/></tr>

            <tr><td colspan="2" style="text-align: center;" >
            <input type="submit" name="submit"  class="submit" id="button" value="Insert"/>
            </td></tr>
            <form action="http://localhost/Dciproject/dbcon.php">
                <tr><td colspan="2"><a href="http://localhost/Dciproject/dbcon.php">view record</a>
            </form>
          
        
        
        </tbody></table></form>
</html>