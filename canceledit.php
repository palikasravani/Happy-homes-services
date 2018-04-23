<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en-US">
<head>
<style>
body
{

	background-color:grey;
	background-repeat: no-repeat;
	background-position: center;

}
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
$flag=0;
       $conn = mysqli_connect ('127.0.0.1', 'root' , '');
		if(!$conn)
		{
			echo "not connected to server";
		}
		if(!mysqli_select_db($conn,'inform'))
		{
			echo "database not selected";
		} 
		
$uname = $_SESSION['username'];
$sql=mysqli_query($conn,"SELECT * FROM bookings WHERE username='$uname'");
if(mysqli_num_rows($sql)>0)
{
		?>
		<table border="1|0" id="x">
			<tr>
			<th><strong>Order ID </strong></th>
			<th><strong>Username </strong></th>
			<th><strong>Mobile No. </strong></th>
			<th><strong>Address </strong></th>
			<th><strong>Living Rooms </strong></th>
			<th><strong>Bed Rooms </strong></th>
			<th><strong>Bath Rooms </strong></th>
			<th><strong>Date </strong></th>
			</tr>
		<?php
		while($row=mysqli_fetch_assoc($sql))
		{
			?>
			<tr>
			<td> <?php echo $row['id']; ?></td>
			<td> <?php echo $row['username']; ?></td>
			<td> <?php echo $row['mob']; ?></td>
			<td> <?php echo $row['address']; ?></td>
			<td> <?php echo $row['living']; ?></td>
			<td> <?php echo $row['bed']; ?></td>
			<td> <?php echo $row['bath']; ?></td>
			<td> <?php echo $row['date']; ?></td>
			</tr><?php
		}
}
else
{
	$flag=1;
	
}
?>
</div>
</div>
<div align="center">
<form action="editbooking.php" method="post">	
<br>
<label for="cancel" style="font-size:150%"><b>Enter Order ID which you want to Edit</b></label><br>
    <input type="text" placeholder="Enter Order ID" name="idd" required><br><br>
	<button class="bi button4">Edit</button><div>
</div>
<br>
<h2><strong>My Orders:--</strong></h2>
<?php if($flag)
	echo "You have no bookings";
?>
</body>
</html>