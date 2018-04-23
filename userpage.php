
<!DOCTYPE html>
<?php
	session_start();?>
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
echo "Welcome";
echo $_SESSION['username'];
echo "<br><br>"
?>	
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
			<td> <button name="mob">edit</button></td>
			</tr>
			<tr>
			<td><strong>Address: </strong></td>
			<td> <?php echo $row['address']; ?></td>
			<td> <button name="address">edit</button></td>
			</tr>
			<tr>
			<td><strong>Type of residence: </strong></td>
			<td> <?php echo $row['tor']; ?></td>
			<td> <button name="tor">edit</button></td>
			</tr>
			<tr>
			<td><strong>No.of Small rooms: </strong></td>
			<td> <?php echo $row['small']; ?></td>
			<td> <button name="small">edit</button></td>
			</tr>
			<tr>
			<td><strong>No.of Large rooms: </strong></td>
			<td> <?php echo $row['large']; ?></td>
			<td> <button name="large">edit</button></td>
			</tr>
			</table></form> <?php
		}
}
?>
<div>
<form action="payment.php" method="post">	
	      <button type="submit">Confirm</button>
</div>
<div>
<button type="button" onclick="window.location.href='logout.php';">Logout</button>
</div>
<div>
<button type="button" onclick="window.location.href='bookings.php';">My Bookings</button>
</div>
</body>
</html>