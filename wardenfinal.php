<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="try1.css">
</head>
<body bgcolor="B6A19E">
<?php
$conn = mysqli_connect('127.0.0.1','root','', 'outpass2');
$sql="SELECT * FROM warden ";
$result = $conn->query($sql);
?>
<div class="header" style="background-color:#6C648B; height:130px">
<table>
<tr>
<td>&ensp;&ensp;<img src="nith.png" height="100px" width="100px"></td>
<td><h1>
<b>&ensp;<font color="black" size="25px" face="Courier new">NATIONAL INSTITUTE OF TECHNOLOGY</font></b></h1></td></tr></table></div>
<div class="head" style="background-color:#68BAA7; height:80px; margin-top:-23px">
<CENTER>
<font color="BLACK" size="20px" face="Courier new">   Ambika Girls Hostel 
     Hamirpur(H.P.) - 177005</CENTER></font></div>
<h3>
<b> <font color="black" size="18px" face="helvetica">HOME OUTPASS FORM</font></b></h3>


<table border="1" style="border:solid 1px black;border-collapse:collapse;margin-left:15%;margin-right:20%;width:70%;">
<tr>
<th style="background-color:#232f3e;color:white; text-align:center;font-size:50px;">Outpass</th>
</tr>

<?php
	$i=0;
	while($row=$result->fetch_assoc())
	{
		 $r=$row['rollno'];
		 $e=$row['email'];
		 $n=$row['name'];
		 $s=$row['sphone'];
		 $p=$row['pphone'];
	     $dd=$row['deptdate'];
		 $dt=$row['deptime'];
		 $ad=$row['arrdate'];
		 $at=$row['arrtime'];
		 $pl=$row['place'];
?>


<tr>
<td style="border:solid 1px black;background-color:#efefef; font-size:18px;">
<b>Roll no.:</b><?php echo $r; ?><br>
<b>Name:</b><?php echo $n; ?><br>
<b>E-mail:</b><?php echo $e; ?><br>
<b>Student's contact no.:</b><?php echo $s; ?><br>
<b>Parent's contact no.:</b><?php echo $p; ?></br>
<b>Departure date:</b><?php echo $dd; ?></br>
<b>Departure time:</b><?php echo $dt; ?></br>
<b>Arrival date:</b><?php echo $ad; ?></br>
<b>Arrival time:</b><?php echo $at; ?></br>
<b>Place :</b><?php echo $pl; ?></br>
<a href="wardenfinal.php?Reject=<?php echo $r; ?>" style=" font-size:24px ;float:right" class="button">Reject </a>
<a href="wardenfinal.php?Accept=<?php echo $r; ?>"style="  font-size:24px; float:right" class="button1">Accept &nbsp;&nbsp;</a>
</td>
</tr>
<?php
$i++;
   }
  if(isset($_GET['Reject']))
  {
	  $Reject_id=$_GET['Reject'];
	  $msg = "Your outpass form has been rejected
	  Kindly refill it.";
	  $mail=mysqli_query($conn,"SELECT email FROM warden WHERE rollno='$Reject_id'");

if($mail-> num_rows>0)
	{
		while($row=$mail->fetch_assoc())
		{
			$toko=$row['email'];
		
		}
		
	}
	$msg = wordwrap($msg,70);
	mail($toko,"My subject",$msg);

	  
	  mysqli_query($conn,"DELETE FROM warden WHERE rollno='$Reject_id'");
	  header("location:wardenfinal.php");
  }
  if(isset($_GET['Accept']))
  {
	  $Accept_id=$_GET['Accept'];
	  
	  	  $msg = "Your outpass form has been accepted.";
		  $mail=mysqli_query($conn,"SELECT email FROM warden WHERE rollno='$Accept_id'");

if($mail-> num_rows>0)
	{
		while($row=$mail->fetch_assoc())
		{
			$toke=$row['email'];
		
		}
		
	}
	$msg = wordwrap($msg,70);
	mail($toke,"My subject",$msg);


	  
	  mysqli_query($conn,"DELETE FROM warden WHERE rollno='$Accept_id'");
	 header("location:wardenfinal.php");
  }
?>

</table>

</body>
</html>