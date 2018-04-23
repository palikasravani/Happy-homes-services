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
			$un=$_SESSION['id'];
			$rs=mysqli_query($conn, "UPDATE bookings SET mob='$t' WHERE id='$un'");
			echo "<script> alert('you have been changed mobile no. successfully');
			window.location.href='mybookings.php';
			</script>";
		}
		else if(isset($_POST['nadd']))
		{
			$t=$_POST['newadd'];
			$un=$_SESSION['id'];
			$rs=mysqli_query($conn, "UPDATE bookings SET address='$t' WHERE id='$un'");
			echo "<script> alert('you have been changed the address successfully');
			window.location.href='mybookings.php';
			</script>";
		}
		else if(isset($_POST['nliving']))
		{
			$t=$_POST['newliving'];
			$un=$_SESSION['id'];
			$rs=mysqli_query($conn, "UPDATE bookings SET living='$t' WHERE id='$un'");
			echo "<script> alert('you have been changed no.of living rooms successfully');
			window.location.href='mybookings.php';
			</script>";
		}
		else if(isset($_POST['nbed']))
		{
			$t=$_POST['newbed'];
			$un=$_SESSION['id'];
			$rs=mysqli_query($conn, "UPDATE bookings SET bed='$t' WHERE id='$un'");
			echo "<script> alert('you have been changed no.of bed rooms successfully');
			window.location.href='mybookings.php';
			</script>";
		}
		else if(isset($_POST['nbath']))
		{
			$t=$_POST['newbath'];
			$un=$_SESSION['id'];
			$rs=mysqli_query($conn, "UPDATE bookings SET bath='$t' WHERE id='$un'");
			echo "<script> alert('you have been changed no.of Bath rooms successfully');
			window.location.href='mybookings.php';
			</script>";
		}
		else if(isset($_POST['ndate']))
		{
			$t=$_POST['newdate'];
			$un=$_SESSION['id'];
			$rs=mysqli_query($conn, "UPDATE bookings SET date='$t' WHERE id='$un'");
			echo "<script> alert('you have been changed the date successfully');
			window.location.href='mybookings.php';
			</script>";
		}

	?>
</body>
</html>