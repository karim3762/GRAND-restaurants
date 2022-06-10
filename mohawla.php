<?php
session_start();
$connect=mysqli_connect("localhost","root","","grnd restaurant");
if(isset($_POST['signup'])){
$name= $_POST["Name"];
$password = $_POST["pass"];
$confirmpassword=$_POST["confirm"];
$mob = $_POST["Phone"];
$email = $_POST["email"];
$id= $_POST["ID"];
$_SESSION["Name"]=$name;
$_SESSION["ID"]=$id;
$_SESSION["Email"]=$email;
$_SESSION["Password"]=$password;
$_SESSION["Phone"]=$mob;
$_SESSION["Role"]=1;
	if($password!=$confirmpassword)
	{
	echo '<script>alert("Passwords not match");window.location.href="signup.php";</script>';
	}
	if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
	{
	echo '<script>alert("Wrong email format");window.location.href="signup.php";</script>';
	}
	if(strlen("$password")<6)
	{
	echo '<script>alert("Password must be at least 6 characters");window.location.href="signup.php";</script>';
	}
$sql="insert into customers (Name,Email,Password,Phone,ID) values ('$name','$email','$id','$mob','$id')";
$result=mysqli_query($connect,$sql);
if(!$result){
	echo "Error inserting into database";
}
header("location:hometest.php");
}



?>
