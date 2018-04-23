<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en-US">
<head>
<style>
.bi{
	margin-top:0%;
	border-radius:12px;
	font-size:25px;
	color:green;
}
.c{
margin-left:35%;
margin-top:20%
}
a{
	color:red;
}
a:hover{
	color:white;
}
.button4:hover{
	background-color:yellow;
	color:black;
}
#dn{
	margin-left:35%;
	margin-top:5%;
	font-size:25px;
}
#but{
	float:right; 
	padding-right:2%;
	font-size:20px;
	text-decoration:none;
}
#big{
	border-radius:12px;
	margin-left:10%;
	font-size:25px;
	color:green;
}
body{background-color:green;}
.w3-bar{
	margin-top:-1%;
	margin-left:-1%;
	width:100%;
	overflow:hidden;
background-color:black;
border:1%;
padding:20px;}
table, th, td{
border:3px solid black;
}
#x{
	
	padding:1px;
	font-size:25px;
	color:white;
	border-collapse:collapse;
}
</style>
</head>
<body>

<div class="w3-bar">	
				
				<a id="but" href="logout.php">Logout</a>
				<a id="but" href="cancelbook.php">Cancel Booking</a>
				<a id="but" href="canceledit.php">Edit Booking</a>
				<a id="but" href="mybookings.php">My Bookings</a>
				<a id="but" href="index1.php">Home</a>
</div>
<br><br>
<?php
if(isset($_POST['mob']))
{
	?>
<div align="center">
<form action="bchange1.php" method="post">	
<label for="mob" style="font-size:150%"><b>Enter new mobile no.</b></label><br>
    <input type="text" name="newmob" required><br><br>
	      <button class="bi button4" type="submit" name="nmob">Save</button>
</div>
<?php
}
else if(isset($_POST['address']))
{
	?>
<div align="center">
<form action="bchange1.php" method="post">	
<label for="mob" style="font-size:150%"><b>Enter new Address</b></label><br>
    <input type="text" name="newadd" required><br><br>
	      <button class="bi button4" type="submit" name="nadd">Save</button>
</div>
<?php
}

else if(isset($_POST['living']))
{
	?>
<div align="center">
<form action="bchange1.php" method="post">	
<label for="small" style="font-size:150%"><b>Enter no.of living rooms</b></label><br>
		  
		  <select name="newliving">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>
	<br>
	<br>
	<button type="submit" class="bi button4" name="nliving">Save</button>

</div>
<?php
}
else if(isset($_POST['bed']))
{
	?>
<div align="center">
<form action="bchange1.php" method="post">	
<label for="mob" style="font-size:150%"><b>Enter no.of Bed rooms</b></label><br>
	<select name="newbed">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>
	<br>
	<br>
	      <button type="submit" class="bi button4" name="nbed">Save</button>
</div>
<?php
}
else if(isset($_POST['bath']))
{
	?>
<div align="center">
<form action="bchange1.php" method="post">	
<label for="mob" style="font-size:150%"><b>Enter no.of Bath rooms</b></label><br>
	<select name="newbath">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>
	<br>
	<br>
	      <button type="submit" class="bi button4" name="nbath">Save</button>
</div>
<?php
}
else if(isset($_POST['date']))
{
	?>
<div align="center">
<form action="bchange1.php" method="post">	
<label for="mob" style="font-size:150%"><b>Enter new Date</b></label><br>
	<input type="date"  name="newdate" required>
	<br>
	<br>
	      <button type="submit" class="bi button4" name="ndate">Save</button>
</div>
<?php
}
?>
</body>
</html>