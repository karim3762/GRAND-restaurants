  <?php ob_start();?>
<html>
<head>
	<title>HOME</title>
	<?php include"nav.php";?>
</head>
<style>
	body
{
 width: 100%;
 margin: 0px;
 padding: 0px;
 box-sizing: border-box;
font-family: 'Times New Roman', serif;
 background-image:url('homee.jpg');  
  background-repeat: ;
 background-size: cover;
}
.main{
	width: 100%;
}
nav
{
	width: 100%;
	height: 43px;
	line-height: 40px;
	padding: 10 px 100 px;
	display: flex;
	justify-content: space-between;
	background: rgba(0, 0, 0, 0.5);
}
.logo a{
	color: white;
	margin-left: 0px;
	padding: 10 px 100 px;
	display: flex;
	border: none;
	background-color: red;
	padding: 0px 0px;

}
.imgcontainer
{
	border: none;
	display: flex;
	padding: 10 px 100 px;

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

.header{
	background-image: url('homee.jpg');
	background-position: center;
	background-size: cover;
	background-repeat: repeat;
	height: 100%;
}
.content{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: white;
	justify-content: center;
text-align: center;

}
.content h1
{
	font-size:50px ;
	border: 1px solid white;
	padding: 10px 25px;
	border-radius: 6px;


}
.content p{
	padding: 0px 50px;
	font-size: 20px;
}
button
{
	background: none;
	border: 1px solid white;
	color: antiquewhite;
	font-size: 19px;
	padding: 10px 25px;
	border-radius: 10px;
	

}
button:hover
{
	letter-spacing: 1px;
  transition: 0.5s;
 cursor: pointer;
  background: black;

}
/*.over{
background: rgba(0, 0, 0, 0.5);
height: 99%;
}*/
/** {box-sizing: border-box;
}*/
/*body {font-family: Verdana, sans-serif;}*/
.mySlides {width: auto;
  display: none;
/*background-image: url(homee.jpg);*/}
/*img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
	width: 80%;
  height: 50%;
  position: relative;
  margin: auto;
  background-image: url(homee.jpg);
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color:white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.5);
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.dot:hover
{
	cursor: pointer;
	transition: 1.0s;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
	.text {
  color: black;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width:auto;
  margin: auto;
  text-align: center;
  border-style:solid ;
  border-radius: 20px;
  background-color: rgba(0, 0, 0, 1.0);
}
.caption
{
position: absolute;
  top: 8px;
  left: 16px;
  padding: 60px;
  color: antiquewhite;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 25px;
  border-radius: 20px;
  border: none;
  font-size: 40px;
  text-decoration: underline;
  text-align: center;

}
.orderbtn
{
	background: none;
	border: 1px solid white;
	color: antiquewhite;
	font-size: 19px;
	padding: 10px 25px;
	border-radius: 10px;
	background-color: black;
	 position: absolute;
  bottom: 0%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<body>
<div class="main">
		<div class="header">
			<!--over di malhsah lazma k-->
      <div class="over"> 
			<div class="content">
				<div class="imgcontainer">
	<img src="lastlogo4.png" alt="img" >
	</div>
				<!--<h1>Welcome TO <br>Grand Restaurant</h1>-->
				<button onclick="window.location.href='menu3.php'">MENU</button>
			</div>
		</div>

<div class="slideshow-container">

<div class="mySlides fade">	
  <img src="nile.jpg"    style="width:1215px; height:350px; border: none;border-radius: 6px;">
  <div class="caption">OUR VIEW<br></div>
 <button class="orderbtn" onclick="window.location.href='menu3.php'">Order NOW</button> 
 </div>


<div class="mySlides fade">
  <img src="pasta2.jpg"  style="width:1215px; height:350px; border: none;border-radius: 6px;">
  <div class="caption">ORDER THIS DISH <br>OUR<a style="font-size: 40px;" href="menu3.php"> MENUS</a></div>
 <button class="orderbtn" onclick="window.location.href=' .php'">Order NOW</button> 
</div>

<div class="mySlides fade">	
  <img src="breakH.jpg"   style="width:1215px; height:350px; border: none;border-radius: 6px;">
  <div class="caption">Come and try our Breakfast<br></div>
 <button class="orderbtn" onclick="window.location.href='menu3.php'">Order NOW</button> 
 </div>
	<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
</div>

<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br><br>
  
</div>
</div>
<!--footer.php ahsan 3ashan yaba l kol el pages-->
<!--<footer class="footer">
  <p><a href="https://miuegypt.edu.eg" title="MIU" target="_blank" class="">MIU.</a></p>
</footer>-->

</body>
<script>
var slideIndex = 0;
showSlides();
var slides,dots;

function plusSlides(position) {
    slideIndex += position;
    if (slideIndex > slides.length) {slideIndex = 1}
    else if(slideIndex < 1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");

      }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }

function currentSlide(index) {
    if (index > slides.length) {index = 1}
    else if(index < 1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
        slides[index-1].style.display = "block";  
        dots[index-1].className += " active";
    }

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
</html>
<?php ob_end_flush();?>