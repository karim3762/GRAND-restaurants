<?php
session_start();
$conn = mysqli_connect("localhost","root","","grnd restaurant");
include "navadmin.php" ;include "style1.css";
?>
<html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<form action="" method="post">

<select name="username" id="username">
<option value=0>-<br></option>
<?php
$query1="Select * from customers";
$result=mysqli_query($conn,$query1);
if($result){
	while($row=mysqli_fetch_array($result))
	{
		$userid=$row["ID"];
		$username=$row["Email"];
		echo "<option value=$userid>$userid <br></option>";
	}
}
?>
</select>
<select name="itemname" id="itemname">
<option value=0>-<br></option>
<?php
$query2="Select * from menu";
$result=mysqli_query($conn,$query2);
if($result){
	while($row=mysqli_fetch_array($result))
	{
		$itemname=$row["name"];
		$itemid=$row["id"];
		echo "<option value=$itemid>$itemname<br></option>";
	}
}
?>
</select>
<input type="submit" name="Show">
</form>


<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>
	<th>RATE</th>	 
	<th>ITEM NAME</th>
	<th>USER ID</th>
</tr>
</thead>

<?php
if(isset($_POST["Show"])){
	$itemtosearch=$_POST["itemname"];
	$usertosearch=$_POST["username"];
	$query3="Select * from rates where userid = $usertosearch AND itemname= $itemtosearch ;";
	$result=mysqli_query($conn,$query3);
	if($result){
		while($row=mysqli_fetch_array($result)){
?>
			<tr>
	            <td><?= $row['rate']; ?></td>
				<td><?= $row['itemname']; ?></td>
				<td><?= $row["userid"];?></td>
            </tr>
			<?php
		}

	}
	
}
?>
</html>