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
		$rid=$_POST['idd'];
		$ch=mysqli_query($conn,"SELECT * FROM bookings WHERE id='$rid'");
		$rs=mysqli_query($conn,"DELETE FROM bookings WHERE id='$rid'");
		$co=mysqli_num_rows($ch);
		if(mysqli_num_rows($ch)==0)
		{
			echo "<script> alert('Please Enter a valid Order ID');
				window.location.href='bookings.php';
				</script>";
		}
		else 
		{
			
				echo "<script> alert('you have been cancelled this order successfully');
				window.location.href='mybookings.php';
				</script>";
			
		}
		
?>
		
		