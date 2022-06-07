<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
session_start();

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM menu";
$result = mysqli_query($conn,$query);
    $sql="SELECT * FROM breakfast";
    $result1=$conn->query($sql);
    $sql3="SELECT * FROM dinner";
    $result3=$conn->query($sql3);
    $sql4="SELECT *from drinks";
    $result4=$conn->query($sql4);
if($conn->connect_error)
{
  die("connection failure: ".$conn->connect_error);
}

$conn->close();

?>

<!DOCTYPE html/>
<html>
<head>
  <link rel="project" href="styles.css">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>Items</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/
jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/
dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/
bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

</head>
<style>
* {
  box-sizing: border-box;  
}
body {
  
  font-family: 'Times New Roman', serif;
  background-image:url('.jpg')  ;  
  height :100%;
  background-color: #222;
  color: #fff;
  width: 100%;
  margin: auto;

}
/*
#myInput {
  background-image: url('');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 90%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin: auto;

}/*
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
    text-align: center;

}*/
.addbtn
{
  background-color:  #04AA6D;
  color: white;
  /*padding: 14px 20px;*/
  text-align: center;
  display: inline-table ;
  margin: auto;
  border: none;
  cursor: pointer;
  width: 50%;
  height: 45px;
  margin: auto;
  border-top-left-radius: auto;
  text-align: auto;
  text-decoration: none;
  /*display: inline-block;*/
border-top-left-radius:25px;  
border-top-right-radius:25px;  
border-bottom-right-radius:25px;  
border-bottom-left-radius:25px;
}
.deletebtn 
{ 
color: white; 
  width: auto;
  padding: 10px 18px;
  cursor: pointer;
  background-color: #04AA6D;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-top-left-radius:25px;  
  border-top-right-radius:25px;  
  border-bottom-right-radius:25px;  
  border-bottom-left-radius:25px;
}
.editbtn
{
  width: auto;
  color: white;
  padding: 10px 18px;
  background-color: #04AA6D;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-top-left-radius:25px;  
  border-top-right-radius:25px;  
  border-bottom-right-radius:25px;  
  border-bottom-left-radius:25px;
}
button:hover {
  opacity: 0.8;
  background: darkgreen;
  letter-spacing: 1px;
  transition: 0.5s;
  font-size: 18Px;
}
.editbtn:hover{
 opacity: 0.8;
  background: darkgreen;
  letter-spacing: 1px;
  transition: 0.5s;
 font-size: 18Px;
}
.deletebtn:hover{
  opacity: 0.8;
  background: darkgreen;
  letter-spacing: 1px;
  transition: 0.5s;
  font-size: 18Px;
}

input
{
width: 80%;
height: 35px;
outline: none;
border: none;
background-color: #333;
margin: 4px 0 auto;
border-radius: 4px;
padding: 4px;
color: whitesmoke;
padding: 12px 20px;
margin: auto;
border: 1px solid darkgreen;
box-sizing: border-box;
display: flex;
padding-right: 40px;

}
.form
{
  width: 80%;
  margin: auto;
}
#myTable {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;  
}
th
{
  text-transform: uppercase;
  background-color: #222;
}
#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header {
  background-color: #f1f1f1;
}
#myTable tr:hover
{
  color: white;
  background-color: transparent;

}
tr ,td{
  padding: 5px;
  opacity: 1;


}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}
.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  background-image: url('searchicon.png');

}
.topnav .search-container button:hover {
  background: #ccc;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
/*
input[type=text],[type=number], input[type=name] {
  width: 80%;
  padding: 12px 20px;
  margin: auto;
  display: inline-block;
  border: 1px solid #ccc outset;
  box-sizing: border-box;
  background-color: red;
  display: flex;
}*/
.addlabel
{
  font-size: 16px;
 font-family: Arial, Helvetica, sans-serif;
  color: black;

}
.item
{
padding-left: 8px;margin: auto; text-transform: uppercase;color: white; text-align: center; text-decoration: underline;
}
.savebtn
{
  width: 50%;
  color: white;
  padding-left: 8px;
  text-align: center;
  margin: auto;   
  background-color: #04AA6D;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-top-left-radius:25px;  
  border-top-right-radius:25px;  
  border-bottom-right-radius:25px;  
  border-bottom-left-radius:25px; 
}
.savebtn:hover{
 opacity: 0.8;
  background: darkgreen;
  letter-spacing: 1px;
  transition: 0.5s;
 font-size: 18Px;
}
</style>
<body>
  
<div class="topnav">
  <a href="home">Home</a>
  <a href="#Orders">Orders</a>
  <a class="active"  href="#Items">Items</a>
  <a href="#about">About</a>
   <a href="logincashier.html">Logout</a>


</div>

<div style="padding-left:16px">
</div>
<br>
<h1 class="item"> Items List</h1>
 <div class="inputs">
   
   <form class="form" action="database.php" method="POST">
    <h2 style="padding-left: 10px; color: white;text-decoration: underline;" >Add Item</h2>
    <label  style="padding-left: 15px; color: White; font-size: 16px ; float: left; " for="Name"><b>Name:</b></label>
     <input type="text" id ="name"placeholder="Name..." required><br>
     <label style="padding-left: 15px;color: White; font-size: 16px ;float: left; margin: auto; width:60px;" for="Indgredients"><b>Infgredients:</b></label>
     <input type="text" id="indgredients" placeholder="Ingredients..." required><br>
     <label style="padding-left: 15px; color: White; font-size: 16px ;float: left; " for="Price"><b>Price:</b></label>
     <input type="number" id="price" placeholder="Price Including Taxes..." required><br>
 
     <input type="submit" class="addbtn" value="add" name="Submit">
     
   <!-- /* $name =  $_POST['name'];
        $ingredients = $_POST['ingredients'];
        $price =  $_POST['price'];
     $sqlAdd="INSERT INTO menu (name,indgredients,price) VALUES('$name','$infgredients','$price')";
     $result1=mysqli_query($conn,$sqlAdd);
     ?>*/-->
   </form>
   </div>

<div class="search-container">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Items.." title="Type in a name" > 
<table id="myTable" name="menu">
  <tr class="header">
<th style="width:20%;"> ID</th>
<th></th>
    <th style="width:25%;">Name</th>
    <th style="width:35%;">Ingredients</th>
    <th style="width:20%;">Price</th>
    <th style="width:20%;">Delete</th>
    <th style="width:20%;">Edit</th>
  </tr>

     <html>
<form method="GET" action="">

<?php
while($row = $result->fetch_assoc())
{
?>
  <html>
  <body>
  <tbody>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><img src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['image']);?>"/></td>
  <td><?= $row['name']; ?></td>
  <td><?=  $row['ingredients']; ?></td>
  <td><?= $row['price']; ?></td>
   <td><input class="deletebtn" type="button" value="Delete" onclick="deleteRow(this)" ></td>
    <td><input class="editbtn" type="button" value="Edit" onclick="EditRow(this)"></td>
</tr>
</tbody>
<?php
}
?>
<?php
while($row = $result1->fetch_assoc())
{
?>
  <html>
  <body>
  <tbody>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><img src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['img']);?>"/></td>
  <td><?= $row['name']; ?></td>
  <td><?=  $row['ingredients']; ?></td>
  <td><?= $row['price']; ?></td>
   <td><input class="deletebtn" type="button" value="Delete" onclick="deleteRow(this)" ></td>
    <td><input class="editbtn" type="button" value="Edit" onclick="EditRow(this)"></td>
</tr>
</tbody>
<?php
}
?>
<?php
while($row = $result3->fetch_assoc())
{
?>
  <html>
  <body>
  <tbody>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><img src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['img']);?>"/></td>
  <td><?= $row['name']; ?></td>
  <td><?=  $row['ingredients']; ?></td>
  <td><?= $row['price']; ?></td>
   <td><input class="deletebtn" type="button" value="Delete" onclick="deleteRow(this)" ></td>
    <td><input class="editbtn" type="button" value="Edit" onclick="EditRow(this)"></td>
</tr>
</tbody>
<?php
}
?>
<?php
while($row = $result4->fetch_assoc())
{
?>
  <html>
  <body>
  <tbody>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><img src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($row['img']);?>"/></td>
  <td><?= $row['name']; ?></td>
  <td><?=  $row['ingredients']; ?></td>
  <td><?= $row['price']; ?></td>
   <td><input class="deletebtn" type="button" value="Delete" onclick="deleteRow(this)" ></td>
    <td><input class="editbtn" type="button" value="Edit" onclick="EditRow(this)"></td>
</tr>
</tbody>
<?php
}
?>
</table>
<p><button type="submit" class="btn btn-success" name="save">DELETE</button></p>

</body>
</html>
</table>
 <br>
</div>
<div class="save">
  <input class="savebtn" type="button" value="Save" onclick="saveBtn(this)">
</div>

<script>
let name=document.getElementById('name');
let indgredients=document.getElementById('indgredients');
let price=document.getElementById('price');
function myFunction() {
 var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1,2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function deleteRow(r){
     var td = event.target.parentNode; 
      var tr = td.parentNode; // the row to be removed
      tr.parentNode.removeChild(tr);
<?php
$del_ID= 
  $sqlDel=" DELETE FROM 'menu' WHERE 'menu'.'id' = $del_ID";
  if($conn->query($sqlDel)===TRUE)
  {
    
     alert ("Record deleted successfully");
  }
  else {
  alert("Error deleting record: " ). $conn->error;
}
  ?>
}
/*
function EditRow(r)
{              
  var name = document.getElementById("name").value,
                indgredients = document.getElementById("indgredients").value,
                price = document.getElementById("price").value;
              
           if(!checkEmptyInput()){
            table.rows[rIndex].cells[0].innerHTML = name;
            table.rows[rIndex].cells[1].innerHTML = indgredients;
            table.rows[rIndex].cells[2].innerHTML = price;
         
          }
}*/
// check the empty input
        function checkEmptyInput()
        {
            var isEmpty = false,
                trap = document.getElementById("trap").value,
                local = document.getElementById("local").value,
                myDate = document.getElementById("myDate").value,
                myDateEnd = document.getElementById("myDateEnd").value;

            if(local === ""){
                alert("Location Connot Be Empty");
                isEmpty = true;
            }
            else if(myDate === ""){
                alert("Start Date Connot Be Empty");
                isEmpty = true;
            }
            else if(myDateEnd === ""){
                alert("End Date Connot Be Empty");
                isEmpty = true;
            }
            return isEmpty;
}


//clear inputs
function clearData(){
name.value='';
indgredients.value='';
price.value='';

}//add
/*
let datapro;
if(localStorage.product!=null){
   dataPro=JSON.parse(localStorage.product)
}
else
{
  dataPro=[]
}
submit.onclick=function(){

 let newPro={
  name:name.value,
  indgredients:indgredients.value,
  price:price.value;
  }
  dataPro.push(newPro);
  localStorage.setItem('product',JSON.stringify(datapro))
  clearData();
  showData();
}*/
//read
/*function showData()
{
  let table='';
  for(let i=0;i<datapro.length;i++)
  {
    table+=`
<tr>
<td>${i}</td>
    <td>${datapro[i].name}</td>
    <td>melting butter, heavy cream, and parmesan cheese together.</td>
    <td>89.99 LE</td>
    <td><input class="deletebtn" type="button" value="Delete" onclick="deleteRow(this)" ></td>
    <td><input class="editbtn" type="button" value="Edit" onclick="EditRow(this)"></td>
  </tr>

    `
  }
  document.getElementById('tbody').innerHTML=table;
}
showData();
//update 
function update(i)
{
name.value=datapro[i].name;
indgredients.value=datapro[i].indgredients;
price.value=datapro[i].price;
submit.innerHTML='Update';

}
function saveBtn()
{

}
/*
function add()
{
 
  $sqladd="INSERT INTO menu(name,ingredients,price) VALUES ("$_POST['name']."','".$_POST["ingredients"]."','".$_POST["price"]."')";
$resultadd=mysqli_query($conn,$sqladd);
?>
}*/
</script>
</body>
</ht>
</div>
</body>
</html>