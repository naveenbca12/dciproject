
<html>
    <head>
        <title>LOGIN FORM</title>
       <link rel="stylesheet" href="style.css">
        
    </head> 
    <body>
    
           <div class ="card">           
                <h1>Login</h1>             
       <form action="http://localhost/Dciproject/loginsuccess.php"   method="post"> 
           <input autocomplete="off" type="text" placeholder="Username" name="uname1"  class="name"  id="name" ><br>
           <input autocomplete="off" type="password" placeholder="Password" name="upswd1" class="upswd" id="upswd" required ><br>
           <p id="errorBox"></p>  
           <input type="submit" name="login" value="login" id="button">

           <p> Dont have an account? <a href="register.html">Register Here</a></p>
       </form> </div>
        </div></body>
</html>
<?php
  if(isset($_GET['message'])){
              echo "<p>".$_GET['message']."</p>";
              }              
?>
