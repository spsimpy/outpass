<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="firstfinal.css">
</head>
<body bgcolor="#E0FFFF">

<div class="header">
<table>
<tr>
<td>&ensp;&ensp;<img src="nith.png" height="100px" width="100px"></td>
<td><b><h2>&ensp;&ensp;National Institue of Technology, Hamirpur</h2></b></td>
</tr>
</table>
</div>
<div class="out">
<h1>
<b ><center>OUTPASS FORM</center></b></h1>
</div>
<div class="nit">
  <img class="mySlides" height="400px" width="100%" src="pic2.jpg" style="width:100%">
  <img class="mySlides" height="400px" width="100%" src="nimbus.jpg" style="width:100%">
  <img class="mySlides" height="400px" width="100%" src="exe.png" style="width:100%">


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
</div>
<div class="fill">
<p><span class="error" >* required field.</span></p>
<form action="formdirect.php"  method="post">
  <div class="container">

    <span class="error">*</span>
   <label ><b>Rollno</b></label>
    <input type="text" placeholder="Enter Rollno" name="rollno" required>
	  <br>
	  <span class="error">*</span>
	  <label ><b>Email</b></label>
	<input type="text" placeholder="Enter Email" name="email" required>
	<br><br>&ensp;&ensp;<input type="submit" value="next" style="font-size:25px; backhround-color:#708090;">
</div>
</form>
</div>

	</body>
	</html>