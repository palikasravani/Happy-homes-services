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
		
$uname = $_SESSION['username'];
echo $uname;
$sql=mysqli_query($conn,"SELECT * FROM availperson");
$sq=mysqli_query($conn,"SELECT * FROM unavailperson");
if(mysqli_num_rows($sql)>0)
{
		?>
		<table>
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
else if(mysqli_num_rows($sq)>0)
{
		while($row=mysqli_fetch_assoc($sq))
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
<?php echo "<br><br><br>";?>
<h3><strong>Our Workers:--</strong></h3>
<?php 
if($flag)
	?><h3><strong>You have no workers</strong></h3>
</body>
</html>