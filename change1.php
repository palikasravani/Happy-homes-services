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
		if(isset($_POST['nmob']))
		{
			$t=$_POST['newmob'];
			$un=$_SESSION['username'];
			$rs=mysqli_query($conn, "UPDATE custdata SET mob='$t' WHERE username='$un'");
			header("Location: form1.php");
		}
		else if(isset($_POST['nadd']))
		{
			$t=$_POST['newadd'];
			$un=$_SESSION['username'];
			$rs=mysqli_query($conn, "UPDATE custdata SET address='$t' WHERE username='$un'");
			header("Location: form1.php");
		}

	?>
</body>
</html>