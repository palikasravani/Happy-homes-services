<!DOCTYPE html>
<html>
<style>
body{
	background-image:url("wallet.jpg");
	background-repeat: no-repeat;
	background-position: center;
}
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

.w3-bar{
	margin-top:-1%;
	margin-left:-1%;
	width:100%;
	overflow:hidden;
background-color:black;
border:1%;
padding:20px;}
#y
{
	font-size:150%;
	margin-top:12%;
}

#down{
	margin-top:-20px;
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
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
</head>

<body>
<div align="center" id="y">
<form action="database.php" method="post">
<table>
<tr>
<td><label for="uuname"><b>Card Number</b></label></td>
      <td><input type="text" placeholder="Enter Card No." required></td>
	  </tr>
	  <tr>
	  <td><label for="uuname"><b>Expiry Date</b></label></td>
      <td><input type="text" placeholder="MM/YY" required></td>
	  </tr>
	  <tr>
	  
	  <td><label for="uuname"><b>CVV</b></label></td>
      <td><input type="text" placeholder="Enter Cvv No." required></td>
	  </tr>
	  </table>
	  <button class="bi button4">Pay Now</button><div>
</form>
</div>
<body>
</html>
