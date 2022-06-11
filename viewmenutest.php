<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grnd restaurant";
session_start();

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<html>
<body>
<head>
  <title>Menu</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <?php include"mainmenu.css";
  include"navtest.php";?>
  
<br>
<h1 class="item"> MENU</h1>
<br><br>
 
</div>
<table id="myTable" name="menu">
  <tr class="header">

<th style="width:10%;"></th>
    <th style="width:25%;">Name</th>
    <th style="width:35%;">Ingredients</th>
    <th style="width:10%;">Price</th>
  </tr>
<html>
<?php
$query = "SELECT * FROM menu";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
        {
while($row = $result->fetch_assoc())
{
?>
  <tbody>
  <tr>
  <td><img src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['image']);?>"/></td>
  <td><?= $row['name']; ?></td>              
  <td><?=  $row['ingredients']; ?></td>
  <td><?= $row['price']; ?></td>
  <input type="hidden" name="hidden_name" class="caption" value="<?php echo $row["name"]; ?>" />  
  <input type="hidden" name="hidden_price" class="caption" value="<?php echo $row["price"]; ?>" />
</tr>
</tbody>
<?php
}
}
?>
</table>
</form>
 <br>
</div>
<button href="signin1.php" class="btn"> Sign In</button>
</body>
</div>
</body>
</html>