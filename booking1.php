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
echo $uname;
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
			<th><strong>Type of Residence </strong></th>
			<th><strong>Small </strong></th>
			<th><strong>Large </strong></th>
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
			<td> <?php echo $row['tor']; ?></td>
			<td> <?php echo $row['small']; ?></td>
			<td> <?php echo $row['large']; ?></td>
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
<button type="button" onclick="window.location.href='cancel.php';">click here</button
</div>
<div>
Do you want to Edit any order?
<button type="button" onclick="window.location.href='editbooking.php';">click here</button
</div>
<?php echo "<br><br><br>";?>
<h3><strong>My Orders:--</strong></h3>
</body>
</html>