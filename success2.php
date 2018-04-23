<!DOCTYPE html>

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
		session_start(); 
		$conn = mysqli_connect ('127.0.0.1', 'root' , '');
		if(!$conn)
		{
			echo "not connected to server";
		}
		if(!mysqli_select_db($conn,'inform'))
		{
			echo "database not selected";
		} 

$tname = $_POST['name'];

$tmob = $_POST['mob'];

$sql=mysqli_query($conn,"INSERT INTO availperson(wname,mob) values ('$tname','$tmob')");

	
		echo "<script> alert('person added successfully');
		window.location.href='adminpage.php';
		</script>";
	$_SESSION['wname']=$tname;
	

	

 
?>
</body>
</html>