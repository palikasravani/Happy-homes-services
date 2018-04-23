<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en-US">
<head>
<style>
.bi{
	margin-top:2%;
	border-radius:12px;
	font-size:25px;
	color:green;
}
.c{
margin-left:35%;
margin-top:20%
}
a{
	color:red;
}
a:hover{
	color:white;
}
.button4:hover{
	background-color:yellow;
	color:black;
}
#dn{
	margin-left:35%;
	margin-top:5%;
	font-size:25px;
}
#but{
	float:right; 
	padding-right:2%;
	font-size:20px;
	text-decoration:none;
}
#big{
	float:right;
	margin-right:50%;
	margin-top:2%;
}
body{background-color:blue;}
.w3-bar{
	margin-top:-1%;
	margin-left:-1%;
	width:100%;
	overflow:hidden;
background-color:black;
border:1%;
padding:20px;}


#down{
	margin-top:-20px;
}
table, th, td{
border:3px solid black;
}
#x{
	padding:1px;
	font-size:25px;
	color:white;
	border-collapse:collapse;
}
</style>
</head>
<body>
<div class="w3-bar">	
				
				<a id="but" href="Logout.php">Logout</a>
				<a id="but" href="removeworker.php">Remove Worker</a>
				<a id="but" href="addworker.php">Add Worker</a>		
</div>		
<div align="center">
<?php
$flag=0;
       $conn = mysqli_connect ('127.0.0.1', 'root' , '');
		if(!$conn)
		{
			echo "not connected to server";
		}
		if(!mysqli_select_db($conn,'inform'))
		{
			echo "database not selected";
		} 
$sql=mysqli_query($conn,"SELECT * FROM availperson");
if(mysqli_num_rows($sql)>0)
{
		?>
		<table border="1" id="x">
			<tr>
			<th><strong>Worker ID </strong></th>
			<th><strong>Name </strong></th>
			<th><strong>Mobile No. </strong></th>
			</tr>
		<?php
		while($row=mysqli_fetch_assoc($sql))
		{
			?>
			<tr>
			<td> <?php echo $row['workerid']; ?></td>
			<td> <?php echo $row['wname']; ?></td>
			<td> <?php echo $row['mob']; ?></td>
			</tr><?php
		}
}
else
{
//	echo "";
	$flag=1;
}
?>
<div>
<form action="cancelw.php" method="post">
<label for="cancel" style="font-size:150%"><b>Enter Worker ID Here </b></label><br>
    <input type="text" placeholder="Enter Worker ID" name="wid" required><br><br>
	      <button class="bi button4">Cancel</button>
</div>
<?php echo "<br>";?>
<h3><strong>Our Workers:--</strong></h3>
<?php 
if($flag)
{
	?>
	<h3><strong>You have no workers</strong></h3>
	<?php
}
?>
</div>
</body>
</html>