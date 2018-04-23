<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en-US">
<head>
<style>
.c{
margin-left:35%;
margin-top:20%
}
</style>
</head>
<body>	
<button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='mybookings.php';">My bookings</button>
                <button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='cancelbook.php';">Cancel Booking</button>
				<button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='canceledit.php';">Edit Booking</button>
				<button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='logout.php';">Logout</button>
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
		
$uname = $_SESSION['username'];
$sql=mysqli_query($conn,"SELECT * FROM bookings WHERE username='$uname'");
if(mysqli_num_rows($sql)>0)
{
		?>
		<table>
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
	echo "You have no bookings";
}
?>
<div>	
Do you want to cancel any order?
<button type="button" onclick="window.location.href='cancelbook.php';">click here</button
</div>
<div>
Do you want to Edit any order?
<button type="button" onclick="window.location.href='canceledit.php';">click here</button
</div>
<?php echo "<br><br><br>";?>
<h3><strong>My Orders:--</strong></h3>
</body>
</html>