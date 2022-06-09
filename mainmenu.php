<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "project2");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="mainmenu.php"</script>';
			}
		}
	}
}   					
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MENU</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<?php include"nav.php";?>
	<?php include"mainmenu.css";?>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center" class="item">THE MENU</h3><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM menu ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="mainmenu.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="main">
						<img src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['image']);?>"class="img-responsive"/><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger"> <?php echo $row["price"]; ?> L.E</h4>
						<h4 class="text-danger"> <?php echo $row["ingredients"]; ?></h4>

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
		<button onclick="window.location.href='createSandwich.php'" class="createSandwich">Create a Sandwich</button>
<br>
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
					if(!empty($_SESSION["shopping_cart"]))
					{

						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_price"]; ?>L.E </td>
						<td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>L.E</td>
						<td><a href="mainmenu.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
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
					$item_name1=$_POST['Mselect'];
       	foreach($_SESSION['shopping_cart'] as $array){
       	 $sql="INSERT INTO orders(cus_id,item_name,item_quantity,item_Price,total) values ('".$_SESSION["ID"]."','".$array['item_name']."','".$array['item_quantity']."','".$array['item_price']."','".$total."')";
       			 $result=mysqli_query($connect,$sql);
       			echo '<script>alert("The Order Submitted Successfully"); window.location.href="checkout.php"; 
       			</script>';
       }
       $_SESSION['shopping_cart']=array();
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