<!DOCTYPE html>
<html>
<head>
<style>
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
	border-radius:12px;
	margin-left:10%;
	font-size:25px;
	color:green;
}
body{background-color:black;
background-image:url("ques.jpg");
background-position:center;
background-repeat: no-repeat;
}
.w3-bar{
	margin-top:-1%;
	margin-left:-1%;
	width:100%;
	overflow:hidden;
background-color:black;
border:1%;
padding:20px;}
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
<div id="dn">
	<h2>SELECT THE FOLLOWING</h2>
	<form action="tempform.php" method="post">
	<strong>Number of Living rooms</strong>
	<select name="living">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>
	<br><br>
	<strong>Number of Bed rooms</strong>
	
	<select name="bed">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>


	<br><br>
	<strong>Number of bath rooms</strong>
	
	<select name="bath">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>
	<br><br>
	<strong>Number of furnitures </strong>
	<select name="furniture">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>
	<br><br>
	<strong>Number of garden plants </strong>
	<select name="plants">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	</select>
	<br><br>
	<strong>Types of kitchens </strong>
	<select name="kitchens">
	  <option value="0">select--</option>
	  <option value="0">0</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  
	</select>
	<br  ><br>
	<label><b>Select the Date</b></label>
<input type="date" min="24-03-2018" name="date" required>
	<br><br>
	


	<button id="big" class="button4">Book Now</button>
	</form></div>
</body>
</html>