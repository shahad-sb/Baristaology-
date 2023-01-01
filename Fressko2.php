<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">

    <title>Baristaology</title> 
	<link rel="stylesheet" href="stylee.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			

    </head>
    <body>

	<!-- icon -->
	<a href ="login.php"style="float:right;margin-top: 10px"><img src="photos/profile.png" width = "30px" height="30px"alt=""></a>
	<a href="shoppingCart .html"style="float:right;margin-top: 10px"><img src="photos/shopping-cart.png" width = "30px" height="30px"alt=""></a>
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

    
<div class="Product_page">
    
  <div class="div_one">    
  
  <p class="Product_page_name">Fressko Camino Cool black</p> 
  <br><br>   
  
  <img src="photos/a2.png" width="300" height="270" class="Phone_page_img">
      
  
  </div>
      
  <div class="div_two">
  
  <p class="Product_page_price">120 SR</p>    
      <hr style="background-color: #ece4e4">

  <dl class="spec_list">
    <details>
<summary>SPECIFICATIONS</summary>
<Br>
  <dt>Vacuum wall to retain heat</dt>
  <hr>
  <dt>Spill proof</dt>  
  <hr>
  <dt>Scratch Resistant Body</dt>
  <hr>
  <dt>Click on the lid to lock</dt>
  <hr>
<dt>Rating : 4/5 </dt>
      </details>
    </dl>
    <button class="add">
      <a href="shoppingCart.html">Shopping Cart</a>
     </button>   
  </div>
  </div>
  
</section>

<br><br><br>
  <fieldset>
 <legend>Comment:</legend>
 <div class="comments">
  <p> <strong><img src="photos/pp1.png" height="20px" width="20px">  Lama:</strong></p>
  <p >Great prodect </p>
            
  <hr>
   <p><strong><img src="photos/pp1.png" height="20px" width="20px">  fahad:</strong></p>
 <p >good.</p>     
  </div>
  </fieldset>
 <br>
<br>
<br>

<h3> Rating: </h3> 
<form>
0<input type="range" name="rating" min="0" max="5" step="1">5
      <br>
      <form action="baristaology.sql" method ="post">
       <div>
        <h3> Name: </h3> 
        <input type="text" placeholder="Enter your name" name="name" required><br>
   
         <h3> Reviews: </h3> 
         <textarea type ="comments" name="comments" row="30" cols="50"> write your comments here. </textarea><br/>
         <br>
         <br>
     <button type="submit" name="submit">submit</button>
    </div>
  </form>
</form>

<?php 
if(isset($_POST["submit"])){  
$con =mysqli_connect("localhost","root","");
if(! $con){
        die('Connection Failed'.mysqli_connect_error());
}
mysqli_select_db($con,"baristaology");

$rating = mysqli_real_escape_string($con, $_POST['rating']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$body = mysqli_real_escape_string($con, $_POST['comments']);

$sql="INSERT INTO `review` (`name`,`body`,`rating`) values ('$name','$body','$rating')";
if(mysqli_query($con,$sql)){
	print("<h4>your review was added successfully</h4>");
}else {
		echo "ERROR" . mysqli_error($con);
	}
}
?>
<!-- footer -->
  <div id="footer">
	<p><br><h4>Contact Information:</h4></p>
    <p><a href="https://twitter.com" class="fa fa-twitter"></a> | <a href="https://www.instagram.com" class="fa fa-instagram"></a> | <a href="mailto:Baristaology@gmail.com">Email</a> | <a href="tel://0587043795">Phone Number</a></p>
			
   </div>
 </body>
</html>