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

$sql="INSERT INTO custdata(username,pswd,name, mob, address, tor,small,large,date) values ('$tuname','$tpswd','$tname', '$tmob', '$taddress','$ttor','$tsmall','$tlarge','$tdate')";
if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}
else
{
	
?>	<h2 class="c"><b>you have been registered successfully</b></h2><?php
}

 
?>
</body>
</html>