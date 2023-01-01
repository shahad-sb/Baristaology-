<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">

    <title>Add Item</title> 
	<link rel="stylesheet" href="stylee.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.container { 
        width : 620px;
		height : 390px;
		padding: 100px 100px; 
        background-color: #ece4e4;
		margin: 10px 5px;
		border: 3px solid #f1f1f1;
		border-radius: 15px;
		position : relative;
		left: 200px;
    }	
.font{
	font-family:  cursive, sans-serif;
	}	
	.m {
		position: relative; 
		right: 100px;
		bottom : 100px
		}
		.m1 {
		position: relative; 
		right: 110px;
		bottom : 290px
		}
		.m2 {
		position: relative; 
		right: 350px;
		bottom : 90px;
		color : #00000;
		}
		button:hover { 
        opacity: 0.7; 
    } 
	.m3 {
		position: relative; 
		right: 130px;
		bottom : 280px;
		color : #00000;
		}
		
		.m4 {
		position: relative; 
		left: 280px;
		bottom : 350px;
		border-radius: 15px;
		color : #00000;
		}
		
		input[type=text] { 
        width: 50%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid #4B1F0E; 
        box-sizing: border-box; 
		border-radius: 15px;
    }
	.m5 {
		position: relative; 
		left: 280px;
		bottom : 350px;
		border-radius: 15px;
		color : #00000;
		}
	#footer1
     { 
       text-align: center;  
       text-decoration: none;
       text-transform: uppercase;
       letter-spacing: 0.1em; 
       background-color:#ece4e4;
       margin-top: 20%;
       padding-bottom:3%;
       }
	   

	</style>
    </head>
    <body>

	<!-- icon -->
	<a href ="admin_login.html"style="float:right;margin-top: 10px"><img src="photos/profile.png" width = "30px" height="30px"alt=""></a>
	<a href="shoppingCart.html"style="float:right;margin-top: 10px"><img src="photos/shopping-cart.png" width = "30px" height="30px"alt=""></a>
	<!-- Logo -->
	<h1><a href ="index.html" ><img src="photos/logo.png" width = "280px" height="170px"></a></h1>    	

    <!--- navbar -->
    <div class="navbar">

	
	<div class="dropdown">
    <button class="dropbtn">Coffee Machine
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="DripCoffeeMakers.html">Drip coffee makers </a>
      <a href="EspressoMachine.html">Espresso machine </a>
    </div>
	</div>
  
   <div class="dropdown">
    <button class="dropbtn">Cups&Thermos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Cups.html">Cups </a>
      <a href="ThermosCup.html">Thermos Cup</a>
    </div>
  </div>
  
   <div class="dropdown">
    <button class="dropbtn">Grinders
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="DripGrinders.html">Drip grinders</a>
      <a href="HarioGlassJapan.html">Hario glass japan</a>
      <a href="Baratza.html">Baratza</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">AboutUs
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AboutUs.html">AboutUs </a>
    </div>
  </div>


<!-- search -->
  <p >
	<form  id="search"  method="post" action="#">
	  <label> 
		  <i class="fa fa-search"style="font-size:20px;float:right;margin-top: 30px" ></i>
		  <input  type="search" style="font-size:30px;font-size:medium;float:right;margin-top: 30px" placeholder="Search">
	  </label>
	</p>
	</div>

<!---  End header -->
<section>
<br><br><br><br><br><br>
<center><h1 class = "font"> Add item  </h1></center><br>
<form method="post" action ="">

	<div class = "container">
	<img class = "m" src = "photos/photo.png" width = "280px" height="280px"alt="upload image of the product">
	
	<input type="file" class ="m2" accept="image/*">
	<input type="text" style="padding = 10px 10px ;" class ="m4" placeholder="ID" name="ID">
	<input type="text" style="padding = 10px 10px ;" class ="m4" placeholder="logo" name="logo">
	
	
	<input class = "m4" type="text" placeholder="Enter product name" name="name" required>
	<br>
	<input class = "m4" style = "padding = 10px 10px ;" type="number" min = "0" placeholder="Enter product price" name="price" required>
	<br><br>
	<label class = "m5 font">product describtion :<br><br>
<textarea name = "description" rows = "10" cols= "40"/> Enter product description....</textarea></label>
<br><br>
<label class = "m5 font">choose which category the product belong to:<br>

	<input type="radio" id="Coffee machine" name="categoryID" value="1">
  	<label for="Coffee machine">Coffee machine</label><br>
	<input type="radio" id="Cups&Thermos" name="categoryID" value="2">
	<label for="Cup"> Cups & Thermos</label><br>
	<input type="radio" id="Grinders" name="categoryID" value="3">
	<label for="Grinderst"> Grinders</label><br>
	
</label><br><br><br>
<button type="submit" name="submit"class = "font" style = "position: relative; left: 600px; bottom : 350px; border-radius: 15px; background-color : lightgreen;padding: 10px 15px;">save & add</button>
</form>
<?php
	if(isset($_POST["submit"])){  
	$con=mysqli_connect("localhost","root","");
	if(! $con){
        die('Connection Failed'.mysqli_connect_error());
}
mysqli_select_db($con,"baristaology");
$ID=mysqli_real_escape_string($con, $_POST['ID']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$logo = mysqli_real_escape_string($con, $_POST['logo']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$categoryID = mysqli_real_escape_string($con, $_POST['categoryID']);

$insert = "INSERT INTO `item` (`ID`,`name`,`logo`,`price`,`description`,`categoryID`) VALUES ('$ID','$name','$logo','$price','$description','$categoryID')";
if(mysqli_query($con,$insert)){
	print("item was added successfully!");
	}
	else {
		echo "ERROR: Could not able to execute $insert. " . mysqli_error($con);
}
	}
?>
<!-- footer -->
<div id="footer1">
	<p><br><h4>Contact Information:</h4></p>
    <p><a href="https://twitter.com" class="fa fa-twitter"></a> | <a href="https://www.instagram.com" class="fa fa-instagram"></a> | <a href="mailto:Baristaology@gmail.com">Email</a> | <a href="tel://0587043795">Phone Number</a></p>
			
   </div>
 </body>
</html>