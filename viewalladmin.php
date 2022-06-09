<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php
session_start();
include "navadmin.php"; 
include "style1.css";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grnd restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM customers";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>

	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
  
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['ID']; ?></td>
	<td><?= $row['Name']; ?></td>
	<td><?=  $row['Email']; ?></td>
	<td><?= $row['Phone']; ?></td>
  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>

</body>
</html>
</html>