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
<div align="center">
<?php
if(isset($_POST['mob']))
{
	?>
<div>
<form action="change1.php" method="post">	
<label for="mob" style="font-size:150%"><b>Enter new mobile no.</b></label><br>
    <input type="text" name="newmob" required><br><br>
	      <button class="bi button4" type="submit" name="nmob">Save</button>
</div>
<?php
}
else if(isset($_POST['address']))
{
	?>
<div>
<form action="change1.php" method="post">	
<label for="mob" style="font-size:150%"><b>Enter new Address</b></label><br>
    <input type="text" name="newadd" required><br><br>
	      <button class="bi button4" type="submit" name="nadd">Save</button>
</div>
<?php
}
?>
</div>
</body>
</html>