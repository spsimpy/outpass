<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="formfill.css">
</head>
<body bgcolor="#98FB98">
<div class="header">
<h1><b>OUTPASS FORM</b></h1>
</div>



<?php

$conn = mysqli_connect('127.0.0.1','root','', 'outpass2');
$roll=$_POST['rollno'];
$e=$_POST['email'];

$sql="SELECT * FROM outpasstable2 WHERE rollno='$roll'";
$result = $conn->query($sql);
if($result -> num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		$name=$row["name"];
		
		$s=$row["sphone"];
		$p=$row["pphone"];
		$place=$row["place"];
		
		
		
	}
}
else
{   
	$name=' ';
	$s='';
		
	$p='';
		
	$place='';
		
		
		
}

?>


<div class="bg">

 

<p><span class="error" >* required field.</span></p>
<form action="insert2.php" style="border:1px solid #ccc" method="post">
  <div class="container">

    <span class="error">*</span>
   <label ><b>Rollno</b></label>
    <input type="text" placeholder="Enter Rollno" name="rollno" required value="<?php echo $roll?>"  readonly>
	
	<span class="error">*</span>
   <label ><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required value="<?php echo $name?>">
	
	<span class="error">*</span>
   <label ><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required value="<?php echo $e?>" readonly>

     <span class="error">*</span>
    <label ><b>Student's phone no</b></label>
    <input type="text" placeholder="Enter Student's phone no" name="sphone" required value="<?php echo $s?>">

     <span class="error">*</span>
    <label ><b>Parent's phone no</b></label>
    <input type="text" placeholder="Enter Parent's phone no " name="pphone" required value="<?php echo $p?>">

    <span class="error">*</span>
 <label ><b>Departure date</b></label>
    <input type="text" placeholder="Enter Departure date" name="deptdate" required>
  
 <span class="error">*</span>
 <label ><b>Departure time</b></label>
    <input type="text" placeholder="Enter Departure time" name="depttime" required>

 <span class="error">*</span>
 <label ><b>Arrival date</b></label>
    <input type="text" placeholder="Enter Arrival date" name="arrivaldate" required>

   <span class="error">*</span>
 <label ><b>Arrival time</b></label>
    <input type="text" placeholder="Enter Arrival time" name="arrivaltime" required>

 <span class="error">*</span>
 <label ><b>Place</b></label>
    <input type="text" placeholder="Enter Place" name="place" required value="<?php echo $place?>">
<br>
<br>
<br>

<div class="a2"><b><u>UNDERTAKING</u></b></p>
<input type="checkbox"> I Agree that the information rendered above is correct and i have informed my parents/guardian in this regard . I owe full resposibility for any kind of untoward incident which may occur during my stay outside the Hostel/Campus and Hostel authority shall not be responsible for this .In case any of the information rendered above is found incorrect at any stage ,I am liable to disciplinary action as per Institute rules. 
</div>
<br>


  
     <div class="nextbtn">
      <input type="submit" style="background-color:#00334e;color:white;font-size:30px;border-radius:20%;width:50%;" value="Next">
    </div>
	

  </div>
</form>

</body>





</html>


