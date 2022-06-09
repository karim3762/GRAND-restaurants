<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grnd restaurant";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['Submit'])){ 
	$sql="Select * from customers where Email ='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);		
	if($row=mysqli_fetch_array($result))	
	{
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["Name"]=$row["Name"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Password"]=$row["Password"];
		$_SESSION["Phone"]=$row["Phone"];
		$_SESSION["Status"]=$row["Status"];
		$SESSION["Role"]=1;
		if($_SESSION["Status"]==0)
			die("Your account is now deactivated, check again later.");
		if($_SESSION["Email"]!="mohamedhossam206@gmail.com"){
		 header("Location:hometest.php");
		}
	      else{
		         header("Location:homeadmin.php");
	          }
	}//end of if row
	else{	
	$sql="Select * from cashier where Email ='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);		
	if($row=mysqli_fetch_array($result))	
	{
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["Name"]=$row["Name"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Password"]=$row["Password"];
		$_SESSION["Phone"]=$row["Phone"];
		$SESSION["Role"]=2;
		if($_SESSION["Status"]==0)
			die("Your account is now deactivated, check again later.");
		if($_SESSION["Email"]!="mohamedhossam206@gmail.com"){
		header("Location:homecashier.php");
		}
	      else{
	        header("Location:homeadmin.php");
	          }
	} //end of if $row
	else	
	{
		echo "Invalid Email or Password";
	}
}//end of else cashier
}//end of post submit
?>
<?php 
include "style1.css";  
include "navtest.php";
?>


<form action="" method="post">
<div class="container">

<input type="email" placeholder="Enter Email" name="Email" required>

<input type="password" placeholder="Enter Password" name="Password" required>

<button type="submit" name="Submit">Login</button>
     
<div class="container">
Don't have an account? <button type="submit" class="button" onclick="window.location.href='/signup.php'">Register</button>
</div>
</div>  
    <span class="psw"> <a href="#">Forgot Password?</a></span>
  </div>
</form>



</body>
</html>