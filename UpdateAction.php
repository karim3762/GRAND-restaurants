<?php
 session_start();
 include "style1.css" ;"navadmin.php";
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "grnd restaurant";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit'])) {
   $sql="UPDATE customers set  Name='" . $_POST['name'] . "',Email='" . $_POST['email'] ."',Status='".$_POST['status'] . "',Phone='" . $_POST['phone'] . "' WHERE ID='" .  $_GET['ID'] . "'";
 
mysqli_query($conn,$sql);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM customers WHERE ID='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Customer Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
 
</div>
<fieldset>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
 
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>

Phone:<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['Phone']; ?>">
<br>

Status:<br>
<input type="text" name="status" class="txtField" value="<?php echo $row['Status']; ?>">
<br>

<input type="submit" name="submit" value="Update" class="buttom">
<br>
</fieldset>
</form>

</body>
</html>