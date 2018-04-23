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
<br><br>
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
		$iid= $_POST['idd'];
		$_SESSION['id']=$iid;
		$sql=mysqli_query($conn,"SELECT * FROM bookings WHERE id='$iid'");
		if(mysqli_num_rows($sql)>0)
		{	
				while($row=mysqli_fetch_assoc($sql))
				{
					?>
					<form action="bchange.php" method="post">
					<table border="1|0" id="x">
					<tr>
					<td><strong>Mobile: </strong></td>
					<td> <?php echo $row['mob']; ?></td>
					<td> <button class="bi button4" name="mob">Edit</button></td>
					</tr>
					<tr>
					<td><strong>Address: </strong></td>
					<td> <?php echo $row['address']; ?></td>
					<td> <button class="bi button4" name="address">Edit</button></td>
					</tr>
					<tr>
					<td><strong>No.of Living rooms: </strong></td>
					<td> <?php echo $row['living']; ?></td>
					<td> <button class="bi button4" name="living">Edit</button></td>
					</tr>
					<tr>
					<td><strong>No.of Bed rooms: </strong></td>
					<td> <?php echo $row['bed']; ?></td>
					<td> <button class="bi button4" name="bed">Edit</button></td>
					</tr>
					<tr>
					<td><strong>No.of Bathrooms: </strong></td>
					<td> <?php echo $row['bath']; ?></td>
					<td> <button class="bi button4" name="bath">Edit</button></td>
					</tr>
					<tr>
					<td><strong>Date: </strong></td>
					<td> <?php echo $row['date']; ?></td>
					<td> <button class="bi button4" name="date">Edit</button></td>
					</tr>
					</table></form> <?php
				}
		}
		else
		{
			echo "<script> alert('Please Enter a valid Order ID');
				window.location.href='canceledit.php';
				</script>";
		}
?>
</div>
</body>
</html>
		
		