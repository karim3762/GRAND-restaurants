<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "grnd restaurant"; 
$conn = mysqli_connect($servername, $username, $password , $DB);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST["foodname"];
$id = $_POST["foodid"];
$type=$_POST["foodtype"];
$ing = $_POST["foodingredients"];
$price = $_POST["foodprice"];
if(isset($_POST['submit'])){
	if(filter_var($price,FILTER_VALIDATE_INT)==false)
	{
	die("Please enter the price in numbering format");
	}
}
$sql = "INSERT INTO menu(Name, ID, Type, Ingredients, Price) VALUES ('$name','$id','$type','$ing','$price')";
if ($conn ->query($sql) === TRUE) {
  echo "New record created succsesfullly";
} else{
echo "Error" . $sql . "<br>" . $conn->error;
}
?>