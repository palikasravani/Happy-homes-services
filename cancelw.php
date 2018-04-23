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
		$rid=$_POST['wid'];
		$rs=mysqli_query($conn,"DELETE FROM availperson WHERE workerid='$rid'");
			
				echo "<script> alert('you have been removed this worker successfully');
				window.location.href='adminpage.php';
				</script>";
			
		
?>
		
		