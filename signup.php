<!DOCTYPE html
<html>
<style>
body {
  background-image: url("signup.jpg");
  font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=textarea] {
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=textarea]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
.error{
	color:red;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the reset button */
.resetbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float reset and booknow buttons and add an equal width */
.resetbtn, .booknowbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for reset button and booknow button on extra small screens */
@media screen and (max-width: 300px) {
    .resetbtn, .booknowbtn {
       width: 100%;
    }
}
.c{
margin-left:55%;
margin-top:-2.5%
}
</style>
<body>
<?php
session_start();
$f=1;
$nameErr = "";
$mobErr= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
	  $f=0;
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
	{
		$f=0;
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  
  if (empty($_POST["mob"])) {
	  $f=0;
    $mobErr = "Mobile Number is required";
  } else {
	  
    $mob = test_input($_POST["mob"]);
    
    if (!preg_match("/^[0-9]*$/",$mob)||strlen($mob)!=10){
		$f=0;
      $mobErr = "Please enter a 10 digit Mobile Number"; 
    }
  }
  if (empty($_POST["username"])) {
	  $f=0;
    $addErr = "UserName is required";
  } else {
	  
    $add = test_input($_POST["mob"]);
    
    if (strlen($add)<3){
		$f=0;
      $addErr = "Please enter username atleast of length 3"; 
    }
  }
  
  
  
  
  
  $_SESSION['cname']=$_POST["name"];
  $_SESSION['cmob']=$_POST["mob"];
  $_SESSION['cusername']=$_POST["username"];
  $_SESSION['cpswd']=$_POST["pswd"];
   $_SESSION['caddress']=$_POST["address"];
  if($f)
	header('Location:success.php');
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to make your home clean.</p>
    <hr>

    <label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" value="<?php echo(isset($_POST['name']))?$_POST['name']:'';?>" required>
	<span class="error">* <?php echo $nameErr;?></span>
	<br><br>
	
    <label for="mob"><b>Mobile No.</b></label><br>
    <input type="text" placeholder="Enter Mobile No." name="mob" value="<?php echo(isset($_POST['mob']))?$_POST['mob']:'';?>" required>
	<span class="error">* <?php echo $mobErr;?></span>
	<br><br>
	
	<label for="username"><b>UserName</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" value="<?php echo(isset($_POST['username']))?$_POST['username']:'';?>" required>
    <br><br>
	
	<label for="pswd"><b>Password</b></label><br>
      <input type="text" placeholder="Enter Password" name="pswd" value="<?php echo(isset($_POST['pswd']))?$_POST['pswd']:'';?>" required><br><br>
	  

	<label for="add"><b>Address</b></label><br>
	<textarea name="address" rows="5" cols="40" placeholder="Address" required><?php echo(isset($_POST['address']))?$_POST['address']:'';?></textarea><br><br>
    

 
    
    <p>By creating an account you agree to our <a href="terms.html" style="color:dodgerblue">Terms & Privacy</a>.</p>
	

    <div class="clearfix">
      <button  type="reset" class="resetbtn">Reset</button>
      <button type="submit" class="booknowbtn" value="success">Register</button>
    </div>
  </div>
</form>

</body>
</html>