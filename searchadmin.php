<style>
table, th, td {
  border: 1px solid black;
}

<?php
session_start();
include "navadmin.php"; include "style1.css"; ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grnd restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM customers";
$result = mysqli_query($conn,$query);

if(isset($_POST['save'])){
    $sql="SELECT * from customers WHERE Email='".$_POST['old']."'";
    $result = mysqli_query($conn,$sql);
    echo"<table>

    <tr>
    
        <th>ID</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Phone</th>
      
         
    </tr>";
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

}
?>
<html>
<form method="post" action="">
<input type="text" name="old" placeholder="Email">
<p><button type="submit" class="btn btn-success" name="save">Search users</button></p>
</form>
</html>