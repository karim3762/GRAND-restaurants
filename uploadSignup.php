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
$Img = $_POST['img'];
$ID = $_POST['ID'];
$_SESSION["Name"]=$name;
$_SESSION["ID"]=$id;
$_SESSION["Email"]=$email;
$_SESSION["Password"]=$password;
$_SESSION["Phone"]=$mob;
$_SESSION["Role"]=1;
$target_dir = "uploads/";
$img = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($img,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $img)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$target_dir = "uploadsIDs/";
$imgid = $target_dir . basename($_FILES["imgid"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($img,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imgid"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["imgid"]["tmp_name"], $imgid)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["imgid"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
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
$sql="insert into customers (Name,Email,Password,Phone,ID,img,nat_img) values ('$name','$email','$id','$mob','$id','$img','$imgid')";
$result=mysqli_query($connect,$sql);
if(!$result){
	echo "Error inserting into database";
}
header("location:hometest.php");
}



?>
