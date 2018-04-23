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

$tname = $_SESSION['cname'];
$tuname=$_SESSION['cusername'];
$tpswd=$_SESSION['cpswd'];
$tmob = $_SESSION['cmob'];
$taddress = $_SESSION['caddress'];
$sql="INSERT INTO custdata(username,pswd,name, mob, address) values ('$tuname','$tpswd','$tname', '$tmob', '$taddress')";
if(!mysqli_query($conn,$sql))
{
	echo "<script>alert('username already exists...plz go back and change the username');</script>";
}
else
{
	
		echo "<script> alert('you have been registered successfully');
		window.location.href='login1.php';
		</script>";
	$_SESSION['username']=$tuname;
	
}
	

 
?>
</body>
</html>