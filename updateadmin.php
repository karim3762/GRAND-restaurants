<style>
table, th, td {
  border: 1px solid black;
}

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
<head>  
</head>
<body>
<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Phone</td>
<td>Status</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
 
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["ID"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Phone"]; ?></td>
<td><?php echo $row["Status"]; ?></td>
<td><a href="UpdateAction.php?ID=<?php echo $row["ID"]; ?>">Edit</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>