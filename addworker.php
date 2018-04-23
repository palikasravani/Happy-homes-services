<!DOCTYPE html
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
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

<form action="success2.php" method="post">
  <div class="container">
    <h1>Add Worker</h1>
    <p>Please fill in this form to add a worker.</p>
    <hr>

    <label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" required><br><br>
	
    <label for="mob"><b>Mobile No.</b></label><br>
    <input type="text" placeholder="Enter Mobile No." name="mob" required><br><br>
  
      <button type="submit" class="booknowbtn" value="success">Add</button>
  </div>
</form>

</body>
</html>