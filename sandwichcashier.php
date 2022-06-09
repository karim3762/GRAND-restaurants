<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "project2");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["cashier_cart"]))
	{
		$item_array_id = array_column($_SESSION["cashier_cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cashier_cart"]);
			$item_array = array(
				'id'			=>	$_GET["id"],
				'name'			=>	$_POST["hidden_name"],
				'price'		=>	$_POST["hidden_price"],
				'quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["cashier_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'id'			=>	$_GET["id"],
			'name'			=>	$_POST["hidden_name"],
			'price'		=>	$_POST["hidden_price"],
			'quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["cashier_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cashier_cart"] as $keys => $values)
		{
			if($values["id"] == $_GET["id"])
			{
				unset($_SESSION["cashier_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cashiermenu.php"</script>';
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create your Own Sandwich</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<?php include"nav.php";?>
	<?php include"cashiermenu.css";?>
	<body>
		<br />
		<div class="container">
			<div class="imgcontainer">
	<img src="lastlogo4.png" alt="img" >
	</div>
			<br />
			<br />
			<br />
			<h2 align="center" class="item">compose  a  Sandwich</h2><br />
			<br /><br />
			<h3 class="headerr"> Breads</h3><br>
			<?php
				$query = "SELECT * FROM bread ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="sandwichcashier.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="main">
						<img  class="img"src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['image']);?>"class="img-responsive"/><br >
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<h4 class="text-danger"> <?php echo $row["price"]; ?> L.E</h4>
						<input type="text" name="quantity"value="1" class="in" />
						<input type="hidden" name="hidden_name" class="caption" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" class="caption" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;"  class="btn" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<br>
			<h3 class="headerr"> Proteins</h3><br><?php
				$query = "SELECT * FROM proteins ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="sandwichcashier.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="main">
						<img class="img" src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['image']);?>"class="img-responsive"/><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<h4 class="text-danger"> <?php echo $row["price"]; ?> L.E</h4>
						<input type="text" name="quantity"value="1" class="in" />
						<input type="hidden" name="hidden_name" class="caption" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" class="caption" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;"  class="btn" value="Add to Cart" />
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<br>
			<h3 class="headerr">  Cheese </h3>
<br>
			<?php
				$query = "SELECT * FROM cheese ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="sandwichcashier.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="main">
						<img class="img" src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['image']);?>"class="img-responsive"/><br />
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<h4 class="text-danger"> <?php echo $row["price"]; ?> L.E</h4>
						<input type="text" name="quantity"value="1" class="in" />
						<input type="hidden" name="hidden_name" class="caption" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" class="caption" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;"  class="btn" value="Add to Cart" />
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<button onclick="window.location.href='cashiermenu.php'" class="sandwichcashier">Back to Main Menu</button>
			<div style="clear:both"></div>
			<br />
			<h3 class="item">Order Details</h3><br>
			<div class="table-responsive">
				<form method="POST" action="">
				<table id="myTable" style="font-size:20px ;">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["cashier_cart"]))
					{

						$total = 0;
						foreach($_SESSION["cashier_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["name"]; ?></td>
						<td><?php echo $values["quantity"]; ?></td>
						<td><?php echo $values["price"]; ?>L.E </td>
						<td> <?php echo number_format($values["quantity"] * $values["price"], 2);?>L.E</td>
						<td><a href="cashiermenu.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["quantity"] * $values["price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"><?php echo number_format($total, 2); ?>L.E</td>				
						<td><input type="submit" name="submit" value="CheckOut" class="addtocart"></td>
					</tr>
			</table>
			<?php 
				if(isset($_POST["submit"])){
       	foreach($_SESSION['cashier_cart'] as $array){
       	 $sql="INSERT INTO cashierorder(name,price,quantity,total) values ('".$array['name']."','".$array['price']."','".$array['quantity']."','".$total."')";
       			 $result=mysqli_query($connect,$sql);
       			echo '<script>alert("The Order Submitted Successfully");
       			 alert("Please Review the Order with the Customer");window.location.href="cashiermenu.php"; 
       			</script>';
       }
       $_SESSION['cashier_cart']=array();
   }

?>
				</form>
				<?php
					}
					?>
					
			</div>
		</div>
	</div>
	<br />
<script>
	
</script>
	</body>
</html>