<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "grnd restaurant"; 
$conn = mysqli_connect($servername, $username, $password , $DB);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST["Name"];
$password = $_POST["pass"];
$confirmpassword=$_POST["confirm"];
$mob = $_POST["Phone"];
$email = $_POST["email"];
$id= $_POST["ID"];

if(isset($_POST['submit'])){
	if($password!=$confirmpassword)
	{
	die("Passwords don't match");
	}
	if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
	{
	die("Incorrect email format");
	}
	if(strlen("$password")<6)
	{
	die("password must be at least 6 characters");
	}
	
}
$sql = "INSERT INTO cashier(Name, Password, Phone, Email, ID) VALUES ('$name','$password','$mob','$email','$id')";
if ($conn ->query($sql) === TRUE) {
  echo "New record created succsesfullly";
} else{
echo "Error" . $sql . "<br>" . $conn->error;
}
?>