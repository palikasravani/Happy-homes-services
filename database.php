<!DOCTYPE html>

<html lang="en-US">
<head>
<style>
.bi{
	margin-top:5%;
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
body{
	background-image: url("d19.jpg");
	background-repeat: no-repeat;
	background-position: center;
}
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
#y
{
	font-size:150%;
	margin-top:12%;
}

	
</style>
</head>
<body>
<div class="w3-bar">	
				
				<a id="but" href="logout.php">Logout</a>
				<a id="but" href="cancelbook.php">Cancel Booking</a>
				<a id="but" href="canceledit.php">Edit Booking</a>
				<a id="but" href="mybookings.php">My Bookings</a>
				<a id="but" href="index1.php">Home</a>
</div>
<div align="center" id="y">
<?php
	session_start(); 
	
		echo "<script> alert('you have been made payment successfully')</script>";
       $conn = mysqli_connect ('127.0.0.1', 'root' , '');
		if(!$conn)
		{
			echo "not connected to server";
		}
		if(!mysqli_select_db($conn,'inform'))
		{
			echo "database not selected";
		} 
		
$uuname = $_SESSION['username'];
$sql=mysqli_query($conn,"SELECT * FROM custdata WHERE username='$uuname'");
if(mysqli_num_rows($sql)>0)
{
		while($row=mysqli_fetch_assoc($sql))
		{
			$tname = $row['name'];
			$tuname=$row['username'];
			$tpswd=$row['pswd'];
			$tmob = $row['mob'];
			$taddress = $row['address'];
			$lsmall=$_SESSION['living'];
			$llarge=$_SESSION['bed'];
			$bsmall=$_SESSION['bath'];
			$fur=$_SESSION['furniture'];
			$gar=$_SESSION['plants'];
			$kit=$_SESSION['kitchen'];
			$date=$_SESSION['date'];

			$res=mysqli_query($conn,"INSERT INTO bookings(username,pswd,name, mob, address,living,bed,bath,furniture,plants,kitchen,date) values ('$tuname','$tpswd','$tname', '$tmob', '$taddress','$lsmall', '$llarge','$bsmall','$fur','$gar','$kit','$date')");
			
		}
}
$r=mysqli_query($conn,"SELECT * FROM availperson");
$rr=rand(1,5);
$c=0;
if(mysqli_num_rows($r)>0)
{
		while($row=mysqli_fetch_assoc($r))
		{
			$c=$c+1;
			if($c==$rr)
			{
				echo "Mr.";
				echo $row['wname'];
				echo " & team will come and clean your house on ";
				echo $date;
				echo ".";
				echo "<br>";
				echo "For any queries, contact ";
				echo  $row['mob'];
			}
			
			
		}
}
?>

<form action="index1.php" method="post">	
	      <!--<button type="submit">Back to HomePage</button>-->
		   <button class="bi button4">Back to HomePage</button><div>
</div>

</body>
</html>