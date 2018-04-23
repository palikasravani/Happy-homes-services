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
$uuname = $_POST['uuname'];
$psswd=$_POST['psswd'];
$_SESSION['errmsg']="";
if($uuname=='admin' && $psswd =='admin')
{
	header("location:adminpage.php");
}
else
{
$sql=mysqli_query($conn,"SELECT * FROM custdata WHERE username='$uuname' and pswd='$psswd'");
$co=mysqli_num_rows($sql);

		if($co==1)
		{
			$_SESSION['username']=$uuname;
			header("location:form.php");
		}
		else
		{
			$_SESSION['errmsg']="Invalid username/password";
			header("location:login.php");
		}

}
?>
</body>
</html>