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
		
$uuname = $_SESSION['username'];
echo $uuname;
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
			$ttor = $row['tor'];
			$tsmall = $row['small'];
			$tlarge = $row['large'];
			$tdate = $row['date'];
			
			$res=mysqli_query($conn,"INSERT INTO bookings(username,pswd,name, mob, address, tor,small,large,date) values ('$tuname','$tpswd','$tname', '$tmob', '$taddress','$ttor','$tsmall','$tlarge','$tdate')");
			echo "No.of Small rooms: ";
			echo $row['small'];
			echo "<br><br>";
			echo "Cost for single small room: ";
			echo "$100";
			echo "<br><br>";
			echo "Cost for total small rooms: ";
			echo $row['small']*100;
			echo "<br><br>";
			
			echo "No.of Large rooms: ";
			echo $row['large'];
			echo "<br><br>";
			echo "Cost for single large room: ";
			echo "$200";
			echo "<br><br>";
			echo "Cost for total large rooms: ";
			echo $row['large']*200;
			echo "<br><br>";
			echo "<strong>Total cost for all rooms: </strong>";
			echo $row['small']*100+$row['large']*200;
			echo "<br><br>";
		}
}
?>
<div>
<form action="payment1.php" method="post">	
	      <button type="submit">Make Payment</button>
</div>
<div>
	      <button type="button" onclick="window.location.href='logout.php';">Logout</button>
</div>
</body>
</html>