<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/
jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/
dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/
bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<style>
nav
{
  width: 100%;
  height: 43px;
  /background-color: black;/
  line-height: 40px;
  padding: 10 px 100 px;
  display: flex;
  justify-content: space-between;
  background: rgba(0, 0, 0, 0.5);
}

a{
text-decoration: none;
color: antiquewhite;
font-size: 17px;
transition: 0.5s all ease;
}
ul
{
  margin: 0px;
  margin-right: 100px;
}
ul li{
float: left;
padding: 0px 10px;
padding-bottom: 5px;
list-style: none;
color: antiquewhite;
}
ul li a:hover
{
  color: antiquewhite;
letter-spacing: 1px;
  transition: 0.5s;
  font-size: 20Px;
  opacity: 0.8;
}
ul li a.active
{
  background-color: transparent;
  color: antiquewhite;
  font-size: 20Px;
  opacity: 0.8;
}
</style>
</head>
<body>
<?php
if(empty($_SESSION["Role"])){
?>
<div class="cont">
		<div class="h">
			<nav>
				<ul>   
				        <li><a href="homenot.php">HOME</a></li>
						<li><a href="viewmenutest.php">MENU</a></li>
						<li><a href="about.php">ABOUT</a></li>
						<li><a href="signin1.php">SIGN IN</a></li>
				</ul>

			</nav>
	</div>
</div>
<?php
}
else if(!empty($_SESSION["Role"]) && $_SESSION["Role"]==1){
	?>
	<div class="cont">
		<div class="h">
			<nav>
				<ul>   
				<li><a><?php echo "Welcome ".$_SESSION["Name"]; ?> </a></li>
				<li><a href="hometest.php">HOME</a></li>
				<li><a href="menutest.php">MENU</a></li>
				<li><a href="prevorders.php">HISTORY</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				</ul>

			</nav>
	</div>
</div>
<?php
}
else if(!empty($_SESSION["Role"]) && $_SESSION["Role"]==2){
?>
	<div class="cont">
		<div class="h">
			<nav>
				<ul>   
				<li><a><?echo "Cashier: ".$_SESSION["Name"]; ?></a></li>
				<li><a href="homecashier.php">HOME</a></li>
				<li><a href="itemscashier.php">SEARCH</a></li>
				<li><a href="cashiermenu.php">MENU</a></li>
				<li><a href="cashierhistory.php">HISTORY</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				</ul>

			</nav>
	</div>
</div>	
<?php
}
else{
	?>
<div class="main">
			<nav>
				<ul>
					    <li><a href="homeadmin.php">HOME</a></li>
						<li><a href="searchadmin.php">SEARCH</a></li>
						<li><a href="addadmin.php">ADD</a></li>
						<li><a href="deleteadmin.php">DELETE</a></li>
						<li><a href="updateadmin.php">EDIT</a></li>
						<li><a href="cancelledadmin.php">VIEW</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</nav>
</div>
<?php
}
?>
</body>
<script>
</script>
</html>