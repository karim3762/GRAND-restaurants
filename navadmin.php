<html>
<head>
<style>
body
{
 width: 100%;
 margin: 0px;
 padding: 0px;
 box-sizing: border-box;
}
.main{
	width: 100%;
}
nav
{
	width: 100%;
	height: 43px;
	background-color: black;
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
  font-size: 20px;
  opacity: 0.8;
}

.header{
	background-image: url('homee.jpg');
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	height: 100%;
}
</style>
</head>
<body>
<div class="main">
			<nav>
				<ul>
						<li><a href="homeadmin.php">HOME</a></li>
						<li><a href="searchadmin.php">SEARCH</a></li>
						<li><a href="addadmin.php">ADD</a></li>
						<li><a href="deleteadmin.php">DELETE</a></li>
						<li><a href="updateadmin.php">EDIT</a></li>
						<li><a href="viewalladmin.php">VIEW</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</nav>
</div>
</body>
</html>