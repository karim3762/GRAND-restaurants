<?php 
session_start();
if($_SESSION["Role"]!=1){
	header("location:outofscope.php");
}
include "navtest.php"; 
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
</head>
<style>
	body{
 width: 100%;
 margin: 0px;
 padding: 0px;
 box-sizing: border-box;
font-family: 'Times New Roman', serif;
 background-image:url('homee.jpg');  
  background-repeat: ;
 background-size: cover;
}
	.contain-word{
  border-style: 1px solid;
  width: 85%;height: auto;
  margin: auto;



}
.h
{

margin: auto; 
text-transform: uppercase;
color: antiquewhite; 
text-align: center; 
text-decoration: underline;
padding-top: 10px; 
}
.words{
  color: white;
  font-size: 25px;
  margin: auto;
  text-align: left;
}
.he{
  padding-left: 8px;
  margin: auto; 
  text-transform: uppercase;
  color: antiquewhite;
   text-align: center; 
  text-decoration: underline;
padding-top: 10px; 

}
.overview
{

}
</style>
<body>
  <h1 class="h">ABOUT</h1>
<div class="contain-word">
	<div class="overview">
		<p class="he">Cairo GRND Restaurant is one of the biggest restaurants in Cairo. It has been operating in Cairo
since 1910. </p>
	</div>
  <br/><br/>
  <p class="he" style="font-size:27px;">     
  -Exclusive reservation for the Marquise boat is available for groups and weddings.</p>
                                    <h3 class="he"><strong>Opening Hours</strong></h3><br>
  <p class="words">
  - Breakfast cruise: everyday from 08:00 pm to 10:00 pm  <br>
  - Launch cruise: everyday from 08:00 pm to 10:00 pm <br>                            
  - Dinner cruise: everyday from 03:00 pm to 05:00 pm<br>
  For reservations, please call: 0223651234</p>


</div>
</body>
</html>