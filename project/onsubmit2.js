
function f1()
{
var x=document.getElementById("t1");
var y=document.getElementById("t2");
 var a=x.value;
var b=y.value;
if((a.length==0) || (b<0) || (b>100))
 alert('wromg data submission');
 else
 alert('Successfull data submission');
}

