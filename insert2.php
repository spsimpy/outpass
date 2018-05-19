<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo"not connected to server";
}
?>
<html>
<body style="background-color:#dbebfa">
</html>

<?php
if(!mysqli_select_db($con,'outpass2'))
{
echo'database not selected';
}
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['sphone'];
$parentphone=$_POST['pphone'];
$depdate=$_POST['deptdate'];
$deptime=$_POST['depttime'];
$arrdate=$_POST['arrivaldate'];
$arrtime=$_POST['arrivaltime'];
$placevisit=$_POST['place'];

$sql="INSERT INTO  outpasstable2(rollno,name,email,sphone,pphone,place) VALUES('$rollno','$name','$email','$phone','$parentphone','$placevisit')";
if(!mysqli_query($con,$sql))
{
	echo"<span style='margin-left:15%;color:green;font-size:40px;'><b>Your outpass has  been filled and submitted successfully!!</b></span></br>
	</br></br>
	<span style='margin-left:40%;text-align:center;color:#fc636b;'><h1>THANK YOU!</h1></span>";
}
else
{
	echo"<span style='margin-left:15%;color:green;font-size:40px;'><b>Your outpass has  been filled and submitted successfully!!</b></span></br>
	</br></br>
	<span style='margin-left:40%;text-align:center;color:#fc636b;'><hh1>THANK YOU!</h1></span>'";
	
}
   
   
   
   
   
   
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo"not connected to server";
}

if(!mysqli_select_db($con,'outpass2'))
{
echo'database not selected';
}
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['sphone'];
$parentphone=$_POST['pphone'];
$placevisit=$_POST['place'];
/*$result=mysql_query("SELECT  id FROM outpass.outpasstable2 WHERE  rollno='$rollno'",$con);

if(mysql_num_rows($result)>0)
{
	echo"it already exists";
}
if(mysql_numrows($result)<=0)
{*/
	$result="INSERT INTO  warden(rollno,name,email,sphone,pphone,deptdate,deptime,arrdate,arrtime,place) VALUES('$rollno','$name','$email','$phone','$parentphone','$depdate','$deptime','$arrdate','$arrtime','$placevisit')";
if(!mysqli_query($con,$result))
{
	//echo"wraden not inserted";
}
else
{
	echo" ";
}


?>




