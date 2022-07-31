//form 1

function vfun(){

    

    //var uname=document.getElementById("name").value;
    //var upswd=document.getElementById("upswd").value;
    var uname=document.forms["myform"]["name"].value;
    var upswd=document.forms["myform"]["upswd"].value;


   
    if( uname=="") //if name is enter and pwd not entered
    {
        document.getElementById("errorBox").innerHTML =
        "please enter the user name";
        return false;
    }

    if(upswd==null || upswd=="") //if pwd is entered and name not entetred
    {
        document.getElementById("errorBox").innerHTML =
        "please enter the password";
        return false;
    }


    if(uname !=''  &&  upswd !='')//both are entered
    {
        alert("Login successfully")
    }

}


//JS FOR REGISTRATION FORM

function vfun1(){   


    var uname1=document.getElementById("uname1").value;
    var email1=document.getElementById("email1").value;
    var upswd1=document.getElementById("upswd1").value;
    var upswd2=document.getElementById("upswd2").value;
   // var uname1=document.forms["myform2"]["uname1"].value;
   // var email1=document.forms["myform2"]["email1"].value;
   // var upswd1=document.forms["myform2"]["upswd1"].value;
   // var upswd2=document.forms["myform2"]["upswd2"].value;


    if(uname1==null || uname1=="") //if user name not entetred
    {
        document.getElementById("errorBox").innerHTML =
        "please enter the username";
        return false;
    }


    if(email1==null || email1=="") //if email is  not entetred
    {
        document.getElementById("errorBox").innerHTML =
        "please enter the email";
        return false;
    }


    if(upswd1==null || upswd1=="") //if pwd is not entetred
    {
        document.getElementById("errorBox").innerHTML =
        "please enter the password";
        return false;
    }


    if(upswd2==null || upswd2=="") //if  re type pwd is not entetred
    {
        document.getElementById("errorBox").innerHTML =
        "please re-enter the password";
        return false;
    }

    if(upswd1 !=  upswd2){    //password and re enter password is not entered
        document.getElementById("errorBox").innerHTML =
        "password not match";
        return false;}


    if(uname1 != '' && upswd1 != '' && upswd2 != '' && email1 != '')
      {        
        alert("Register successfull");
      }
    }

