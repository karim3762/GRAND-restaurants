<?php
session_start();
include "navtest.php"; 
include "style1.css";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grnd restaurant";

$name=$_SESSION["Name"];
$id=$_SESSION["ID"];

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM orders WHERE cus_id='" . $id. "'";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>
	<th>Order</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Total</th>
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['item_name']; ?></td>
	<td><?= $row['item_price']; ?></td>
	<td><?= $row['item_quantity']; ?></td>
	<td><?= $row['total']; ?></td>

  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>

</body>
</html>
</html>