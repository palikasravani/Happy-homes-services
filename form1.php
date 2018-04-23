<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
<style>
img {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}
.bi{
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
	margin-top:2%;
}
body{background-color:white;
background-image:url("b3.jpg");
opacity: 1;
background-position:center;
background-repeat: no-repeat;
width: 500;}
.w3-bar{
	margin-top:-1%;
	margin-left:-1%;
	width:100%;
	overflow:hidden;
background-color:black;
border:1%;
padding:20px;}


#down{
	margin-top:-20px;
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
<div id="dn">
<h3>EDIT YOUR DETAILS IF NECESSARY</h3>
<div id="down">
<?php
       $conn = mysqli_connect ('127.0.0.1', 'root' , '');
		if(!$conn)
		{
			echo "not connected to server";
		}
		if(!mysqli_select_db($conn,'inform'))
		{
			echo "database not selected";
		} 
$uuname = $_SESSION['username'];
$sql=mysqli_query($conn,"SELECT * FROM custdata WHERE username='$uuname'");
if(mysqli_num_rows($sql)>0)
{	
		while($row=mysqli_fetch_assoc($sql))
		{
			?>
			<form action="change.php" method="post">
			<table>
			<tr>
			<td><strong>Mobile: </strong></td>
			<td> <?php echo $row['mob']; ?></td>
			<td> <button style="font-size:20px;" class="bi button4" name="mob">Edit</button></td>
			</tr>
			<tr>
			<td><strong>Address: </strong></td>
			<td> <?php echo $row['address']; ?></td>
			<td> <button style="font-size:20px;" class="bi button4" name="address">Edit</button></td>
			</tr>
			</table>
			 <?php
		}
}
?>
</div>
<div id="big" >
<button type="button" class="bi button4" onclick="window.location.href='print.php';">Confirm Details</button>
</div>
</div>
