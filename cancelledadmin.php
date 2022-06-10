<?php
session_start();
include "style1.css";
include "navadmin.php";
//if($_SESSION["Role"]!=3){
	//header("location:outofscope.php");
//}
$connect=mysqli_connect("localhost","root","","grnd restaurant");
if(!$connect){
die("failed to connect to database");
}

$sql="select * from orders";
$result=mysqli_query($connect,$sql);
if($result){
		while($row=mysqli_fetch_array($result)){
			$sum=mysqli_num_rows($result);
		}
	}
echo "Total Orders: ". $sum."<br>";

$sql="select * from orders where status='-1'";
$result=mysqli_query($connect,$sql);
$totalcancelled=mysqli_num_rows($result);
echo "Total orders cancelled : ".$totalcancelled."<br>";

$sql2="select * from orders group by item_name order by count(*) desc limit 1";
$result=mysqli_query($connect,$sql2);
if($result){
		while($row=mysqli_fetch_array($result)){
			$most=$row["item_name"];
		}
	}
echo "The most ordered order is: ". $most."<br>";

$sql="select * from orders where status='2'";
$result=mysqli_query($connect,$sql);
if($result){
		while($row=mysqli_fetch_array($result)){
			$edited=mysqli_num_rows($result);
		}
	}
echo "Total edited orders: ". $edited."<br>";

?>