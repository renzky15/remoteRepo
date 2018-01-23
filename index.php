<?php
session_start();  
require 'config.inc.php'; 

$uname= $_POST['uname'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$cpass= $_POST['cpass'];
$firstname= $_POST['fname'];
$lastname = $_POST['lname'];
$contact= $_POST['contact'];
$address= $_POST['address'];
$city= $_POST['city'];
$state= $_POST['state'];
$zip= $_POST['zip'];


		$sql= "INSERT INTO information (username,email,password,confirm_pass,fName,Lname,Contact,Address,City,State,Zip) values ('$uname','$email','$pass','$cpass','$firstname','$lastname','$contact','$address','$city','$state','$zip')";	

		 mysqli_query($con,$sql);
		
 ?>


<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form action="" method="post">
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label>Username: </label> <input id="uname" type="text" name="uname" /><br />
		<label>Email: </label> <input id="email" type="text" name="email" /><br />
		<label>Password: </label> <input id="pass" type="password" name="pass" /><br />
		<label>Confirm Password: </label> <input id="cpass" type="password" name="cpass" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label>Firstname: </label> <input id="fname" type="text" name="fname" /><br />
		<label>Lastname: </label> <input id="lname" type="text" name="lname" /><br />
		<label>Contact: </label> <input id="contact" type="text" name="contact" /><br />
		<label>Address: </label> <textarea id="address" rows="2" cols="20" name="address" ></textarea><br />
		<label>City: </label> <input id="city" type="text" name="city" /><br />
		<label>State</label> <input id="state" type="text" name="state" /><br />
		<label>Zip Code</label> <input id="zip" type="text" name="zip" />
	</fieldset>
	<input type="submit" value="Register"/>
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>

</body>

</html>