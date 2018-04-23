ss<!DOCTYPE html>
<html>
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
$uuname = $_SESSION['username'];
$_SESSION['living']=$_POST['living'];
$_SESSION['bed']=$_POST['bed'];
$_SESSION['bath']=$_POST['bath'];
$_SESSION['furniture']=$_POST['furniture'];
$_SESSION['plants']=$_POST['plants'];
$_SESSION['kitchen']=$_POST['kitchen'];
$_SESSION['date']=$_POST['date'];
header("location:form1.php");
?>