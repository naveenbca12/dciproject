<html>
<title></title>
<head>
 <style>
  div{
    color:yellow;
  }

h5
{
  float:left;
  margin-left :45px;
  background:;
  font-size:15;
  color:white;
  border:black;
} 
  .container {    
    background:grey;
    padding:2px 20px;
    justify-content:center;
    text-align: center;
  }
  .sp{
    text-align:center;
    font-size:40px;
    color:2px solid yellow;
  }

  .user{
    color:2px solid red;
  }

  a{
    text-decoration:none;
    font-size:30px;
    color:white;
    background-color:green;
  }

  #button{
    border: 20px;
    padding: 10px 20px;
    background: red;
    color: white;    
    float:right;
    font-size: 15;
    cursor: pointer;
    width: 100px;    
  }

    </style>
</head>
<body>

    <div class="container ">
       <form name="myform2"  action="http://localhost/Dciproject/logout.php" method="post" > 
        <span class="user"> 
     <?php
        session_start();
        if($_SESSION['uname1'])
         {
             echo "<h5>WELCOME".$_SESSION['uname1']."</h5>";
         }
        else
          { 
            header('location:loginpage.php');
          }
    ?></span>
        <span class="sp">PRODUCT   MANAGEMENT</span>
               <input type="submit" value="LOGOUT"  class="btn btn-success" id="button"></form>
       </div>
</div>
<a href="formdata.php">insert</a></body>
</html>



