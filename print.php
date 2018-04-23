<!DOCTYPE html>
<html>
<head>
<style>
.bi{
	margin-top:5%;
	border-radius:12px;
	font-size:25px;
	color:green;
}
.c{
margin-left:35%;
margin-top:20%
}
a{
	color:#d62f8d;
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
	float:right;
	margin-right:50%;
	margin-top:2%;
}
body{
  
    background-color: #d62f8d;
	background-position: center;
	background-repeat: no-repeat;
}
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
<?php
$cost=0;
session_start();
?><div align="center">
	<table border="1" id="x">

	<tr>
	<td><?php echo "No.of living rooms: ";?></td>
	<td><?php echo $_SESSION['living'];?></td>
	</tr>
	<tr>
	<td><?php echo "Cost for single living room: ";?></td>
	<td><?php echo "$100";?></td>
	</tr>	
        <tr>	
		<td><?php echo "Cost for total living rooms: ";?></td>
		<td><?php echo $_SESSION['living']*100;?></td>
		</tr>	
		
		<?php	$cost=$cost+$_SESSION['living']*100;?>
		
		<tr>
	<td><?php echo "No.of Bed rooms: ";?></td>
	<td><?php echo $_SESSION['bed'];?></td>
	</tr>
			<tr>
		<td><?php echo "Cost for single bed room: ";?></td>
		<td><?php echo "$70";?></td>
		</tr>
		<tr>
		<td><?php echo "Cost for total bed rooms: ";?></td>
		<td><?php echo $_SESSION['bed']*70;?></td>
		</tr>
			
			<?php $cost=$cost+$_SESSION['bed']*70;?>
		
			<tr>
	<td><?php echo "No.of Bath rooms: ";?></td>
	<td><?php echo $_SESSION['bath'];?></td>
	</tr>
	<tr>
			
	<td><?php	echo "Cost for single bath room: ";?></td>
	<td><?php		echo "$130";?></td>
	</tr>
	<tr>
	
		<td><?php	echo "Cost for total bath rooms: ";?></td>
		<td><?php	echo $_SESSION['bath']*130;?></td>
		</tr>
			
			<?php $cost=$cost+$_SESSION['bath']*130;?>

	<tr>
	<td><?php echo "No.of furnitures: ";?></td>
	<td><?php echo $_SESSION['furniture'];?></td>
	</tr>
	<tr>
	<td><?php echo "Cost for single furniture: ";?></td>
	<td><?php echo "$500";?></td>
	</tr>	
<tr>	
		<td><?php echo "Cost for total furnitures: ";?></td>
		<td><?php echo $_SESSION['furniture']*500;?></td>
		</tr>	
		
		<?php	$cost=$cost+$_SESSION['furniture']*500;?>
	
	<tr>
	<td><?php echo "No.of plants: ";?></td>
	<td><?php echo $_SESSION['plants'];?></td>
	</tr>
	<tr>
	<td><?php echo "Cost for single plant: ";?></td>
	<td><?php echo "$200";?></td>
	</tr>	
<tr>	
		<td><?php echo "Cost for total plants: ";?></td>
		<td><?php echo $_SESSION['plants']*200;?></td>
		</tr>	
		
		<?php	$cost=$cost+$_SESSION['plants']*200;?>
		
	<tr>
	<td><?php echo "type of kitchen: ";?></td>
	<td><?php echo $_SESSION['kitchen'];?></td>
	</tr>
	<tr>
	<td><?php echo "Cost for single type of kitchen: ";?></td>
	<td><?php echo "$600";?></td>
	</tr>	
<tr>	
		<td><?php echo "Cost for total types of kitchen: ";?></td>
		<td><?php echo $_SESSION['kitchen']*600;?></td>
		</tr>	
		
		<?php	$cost=$cost+$_SESSION['kitchen']*600;?>
			
			<tr>
		<td><?php	echo "<strong>Total Cost:</strong>";?></td>
		<td><?php	echo $cost;?></td>
		</tr>
		</table>
		
			<button class="bi button4" onclick="window.location.href='pay_page.php';">Make Payment</button><div>
</body>
</html>