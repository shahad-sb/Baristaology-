<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">

    <title>Login</title> 

 	<link rel="stylesheet" href="stylee.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			

	<style>
	.container { 
        width : 320px;
		padding: 10px; 
        background-color: #d6c9c9;
		margin: 10px 5px;
		border: 3px solid #f1f1f1;
		border-radius: 15px;
		 
    }
	input[type=text], input[type=password] { 
        width: 50%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid #4B1F0E; 
        box-sizing: border-box; 
		border-radius: 15px;
    }
	.font{
	font-family:  cursive, sans-serif;
	}
	button:hover { 
        opacity: 0.7; 
    } 
	button {
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
		color :#00000;
		border-radius:15px;
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
<br><br><br><br>

	 <center> <h1 class = "font"> Admin Login  </h1> </center>
	 
	 <form  method = "post" action = "" autocomplete="on" >
	 
	 <center>
		<div class = "container">
	
		<center> 
		<img src="photos/admin1.png" width = "140px" height="140px"alt=""></a>
		<br>
		</center>
		
	 <label class = "font">Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required>
			<br>
            <label class = "font">Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
             <center><button type="submit" name = "submit">Login</button> </center>
			
	 </div></center>
	 </form>
<?php
 if(isset($_POST["submit"])){  
$f_usr= $_POST["username"];
$f_pswd= $_POST["password"];
$con=mysqli_connect("localhost","root","");
if(! $con)
{
        die('Connection Failed'.mysqli_connect_error());
}
mysqli_select_db($con,"baristaology");
$result=mysqli_query($con ,"select username, password from admin");

$row=mysqli_fetch_array($result);
if($row['username']==$f_usr && $row['password']==$f_pswd)
{
    header("Location:contact.html");  
}   
	else {print("Error");} 

 }
?>
	 <!-- footer -->
  <div id="footer1">
	<p><br><h4>Contact Information:</h4></p>
    <p><a href="https://twitter.com" class="fa fa-twitter"></a> | <a href="https://www.instagram.com" class="fa fa-instagram"></a> | <a href="mailto:Baristaology@gmail.com">Email</a> | <a href="tel://0587043795">Phone Number</a></p>
			
   </div>
	</body>
	</html>