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
       $conn = mysqli_connect ('127.0.0.1', 'root' , '');
		if(!$conn)
		{
			echo "not connected to server";
		}
		if(!mysqli_select_db($conn,'inform'))
		{
			echo "database not selected";
		} 

$uuname = $_POST['uuname'];
$psswd=$_POST['psswd'];

$sql="SELECT * FROM custdata WHERE username='$uuname' and pswd='$psswd'";
$co=mysql_num_rows($sql);
if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}
else
{

		if($co==1)
		{}
		else
		{
			echo "invalid username/password";
?>	<h2 class="c"><b>we received your request successfully</b></h2><?php
}

 
?>
</body>
</html>