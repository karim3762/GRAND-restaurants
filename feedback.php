<?php
session_start();
$conn = mysqli_connect("localhost","root","","grnd restaurant");
include "navtest.php";
?>
<style>
body{
	font-family: 'Times New Roman', serif;
  	background-image:url('homee.jpg');  
  	height :100%;
  	color: antiquewhite;
  	width:100%;
  	margin: auto;
  	background-color: #222;
	background-repeat:;
  	background-size:auto ;
}
fieldset {
  display: block;
  margin-left: 150px;
  margin-right: 150px;
  padding-top: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
  padding-right: 15px;
  border: 2px groove;
}
.item
{
padding-left: 8px;margin: auto; text-transform: uppercase;color: antiquewhite; text-align: center; text-decoration: underline;
padding-top: 10px; font-size: 35px;
cursor: pointer;
}
.text{
/*float: left;text-transform:uppercase;color: antiquewhite; text-align: left;background-color: antiquewhite;padding: 10px	;
color: black;*/
padding-left: 8px;margin: auto; text-transform: uppercase;color: antiquewhite; text-align: center; text-decoration: underline;
padding-top: 10px; background-color: antiquewhite;padding: 10px	;color: black; width: 50%;

}
#myTable {
 font-family: 'Times New Roman', serif;
  border-collapse: collapse;
  width: 80%;
  margin: auto;
  border: 1px solid #ddd;
  font-size: 18px;
background-color:black;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;  
padding-right:50px ;

}
th
{
  text-transform: uppercase;
  background-color: antiquewhite;
  color: black;
padding-right:50px ;

}
#myTable tr {
  border-bottom: 1px solid #ddd;

}

#myTable tr.header {
  background-color: #333;
}
#myTable tr:hover
{
  color: antiquewhite;
  background-color: transparent;
  cursor: pointer;
}
tr ,td{
  padding: 5px;
  opacity: 1;
}	


.search {
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: rgba(0, 0, 0, 0.5);
  font-size: 17px;
  width: 80%;	
  border: none;
  background-image: url('searchicon.png');
  border-radius:6px ;
} 
.in
{

width: 20%;
height: 35px;
outline: none;
border: none;
background-color: antiquewhite;
margin: 4px 0 auto;
border-radius: 4px;
padding: 4px;
color: black;
padding: 12px 20px;
margin: auto;
border: 1px solid darkgreen;
box-sizing: border-box;
display: flex;
padding-right: 40px;
background-image: url('');
}

.dropmenu
{
    border-radius: 6px;
    width: 100%;
       
}
.dropmenu #Mselect
{
    background-color: antiquewhite;
    width: 100%;
    margin: auto;
    color:black ;
        border-radius: 6px;
        font-size: 20px;
        text-align: center;

}
.sandbtn
{
color: black; 
  width: 65%;
  margin: auto;
padding: 10px 18px;
  cursor: pointer;
  background-color: antiquewhite    ;
  display: flex;
  text-align: center;
  font-size: 20px;
border-radius: 25px;
}
.sandbtn:hover
  {
    background-color: salmon;
    opacity: 0.8;
  letter-spacing: 2px;
  transition: 0.5s;
 font-size: 22  Px;
  }
  .btn {
  	color: black; 
  width: auto;
  padding: 10px 18px;
  cursor: pointer;
  background-color: antiquewhite	;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-top-left-radius:25px;  
  border-top-right-radius:25px;  
  border-bottom-right-radius:25px;  
  border-bottom-left-radius:25px;
  }
  .caption{
  	color: black;
  	font-size: 15px;
  }
  .main{
  	border:3px solid salmon; 
  	background-color:rgba(0, 0, 0, 0.5); 
  	border-radius:5px; 
  	padding:10px; 
  	text-align: center;
  	width: 70%;
  	margin: auto;
  		color: antiquewhite;
  }
  .img-responsive
  {
  	border:3px solid black;
  }
  </style>


<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<body>
<div class="container">
    <div class="row">

<form action="" method="post">
    <div>

<select name="foodtype" id="foodtype">
<?php
$query1="Select * from menu";
$result=mysqli_query($conn,$query1);
if($result){
	while($row=mysqli_fetch_array($result))
	{
		$itemname=$row["name"];
		echo "<option value=$itemname>$itemname<br></option>";
	}
}
?>

</select>

    </div>

         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'>0</span>
    <input type="hidden" name="rating">

    </div>

    <div><input type="submit" name="add"> </div>

</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
</body>

</html>
<?php
if (isset($_POST["add"]))
{
    $itemname1 = $_POST["foodtype"];
    $rating = $_POST["rating"];
	$userid=$_SESSION["ID"];

    $sql = "INSERT INTO rates (userid,itemname,rate) VALUES ('$userid','$itemname1','$rating')";
    if (mysqli_query($conn, $sql))
    {
        echo '<script>alert("Thank you for your feedback!");</script>';
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>