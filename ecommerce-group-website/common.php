<?php

function setHead($page_title){
	
		echo "<!DOCTYPE html>";
		echo "<html>"; 
		echo "<head>";
		echo "<title>.$page_title.</title>";
		echo '<meta charset="utf-8>';
      	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
      	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">';
      	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
      	echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>';
      	echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
      	echo '<link rel ="stylesheet" type="text/css" href="static/css/styles.css">';
      	echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
      	echo '<script type="text/javascript" src="js/menu.js"></script>';
      

}


function setMenuBar(){

     
  if(isset($_SESSION['username'])){
  	  echo '<div class="responsive-menu-bar">';
      echo '<nav class="navbar navbar-inverse navbar-light bg-light">';
      echo '<div class="responsive-hamburgur-menu">';
      echo '<span class="open-slide">';
      echo '<a href="#" onclick="openSlideMenu()">';
      echo '<svg width="30" height="30">';
      echo '<path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>';
      echo ' <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>';
      echo '<path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>';
      echo "</svg>";
      echo "</a>";
      echo "</span>";
      echo "</div>";
      echo '<div class="container-fluid">';
      echo '<div class="navbar-header">';
      echo '<a  class="navbar-brand">Undines shop</a>';
      echo "</div>";
      echo '<div class="header">';
      echo '<ul class="nav navbar-nav">';
  	  echo '<li><a href="index.php">Home</a></li>';
      echo '<li><a href="about-us.php">About us</a></li>';
      echo '<li><a href="products.php">products</a></li>';
      echo '<div class="search-bar">';
      echo "<form>";
      echo '<input type="text" placeholder="Search.." name="search">';
      echo '<button type="submit"><i class="fa fa-search"></i></button>';
      echo "</form>";
      echo "</div>";
      echo  '​<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>';
      echo  '<ul class="dropdown-menu">';
      echo  '<li><a href="welcome.php">View profile</a></li>';
      echo  '<li><a href="#">View historys</a></li>';
      echo  '<li><a href="basket.php">Your basket</a></li>';
      echo '<li class="logout-menu"><a href="logout.php" class="menu-item"><span class="glyphicon"></span>logout</a></li>';
      echo  "​</ul>";
      echo  "</li>";
      echo '<a class="menu-item"><span></span>';
      echo '<li class="login-menu"><a href="logout.php" class="menu-item"><span class="glyphicon"></span></a></li>';
      echo "</div>";
      echo "</ul>";
      echo "</div>";
      echo "</nav>";
      echo '<div id="side-menu" class="side-nav navbar-light bg-light">';
      echo '<a href="#" class="btn-close" onclick="closeSlideMenu()">&times</a>';
      echo "<br>";
      echo "<br>";
      echo '<a href="index.php" class="menu-item">Home</a>';
      echo '<a href="about-us.php" class="menu-item">About us</a>';
      echo '<a href="products.php" class="menu-item">Products</a>';
      echo  '<a href="welcome.php" class="menu-item">View profile</a>';
      echo  '<a href="#" class="menu-item">View historys</a>';
      echo  '<a href="#" class="menu-item">Your basket</a>';
      echo '<a href="logout.php" class="menu-item"><span class="glyphicon glyphicon-log-in"></span>logout</a>';
      echo '<div class="responsive-navbar-brand">';
      echo '<a  class="navbar-brand">Undines shop</a>';
      echo "</div>";
      echo "</div>";     
       	 }else {

      echo '<div class="responsive-menu-bar">';
      echo '<nav class="navbar navbar-inverse navbar-light bg-light">';
      echo '<div class="responsive-hamburgur-menu">';
      echo '<span class="open-slide">';
      echo '<a href="#" onclick="openSlideMenu()">';
      echo '<svg width="30" height="30">';
      echo '<path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>';
      echo ' <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>';
      echo '<path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>';
      echo "</svg>";
      echo "</a>";
      echo "</span>";
      echo "</div>";
      echo '<div class="container-fluid">';
      echo '<div class="navbar-header">';
      echo '<a  class="navbar-brand">Undines shop</a>';
      echo "</div>";
      echo '<div class="header">';
      echo '<ul class="nav navbar-nav">';
  	  echo '<li><a href="index.php">Home</a></li>';
      echo '<li><a href="about-us.php">About us</a></li>';
      echo '<li><a href="products.php">products</a></li>';
      echo '<div class="search-bar">';
      echo "<form>";
      echo '<input type="text" placeholder="Search.." name="search">';
      echo '<button type="submit"><i class="fa fa-search"></i></button>';
      echo "</form>";
      echo "</div>";
      echo '<li  class="register-menu"><a href="Register.php" class="menu-item"><span class="glyphicon glyphicon-user"></span>Register</a></li>';
      echo '<li class="login-menu"><a href="login.php" class="menu-item"><span class="glyphicon glyphicon-log-in"></span>login</a></li>';
      echo "</div>";
      echo "</ul>";
      echo "</div>";
      echo "</nav>";
      echo '<div id="side-menu" class="side-nav navbar-light bg-light">';
      echo '<a href="#" class="btn-close" onclick="closeSlideMenu()">&times</a>';
      echo "<br>";
      echo "<br>";
      echo '<a href="index.php" class="menu-item">Home</a>';
      echo '<a href="about-us.php" class="menu-item">About us</a>';
      echo '<a href="products.php" class="menu-item">Products</a>';
      echo '<a href="register.php" class="menu-item"><span class="glyphicon glyphicon-user"></span>Register</a>';
      echo '<a href="login.php" class="menu-item"><span class="glyphicon glyphicon-log-in"></span>login</a>';
      echo '<div class="responsive-navbar-brand">';
      echo '<a  class="navbar-brand">Undines shop</a>';
      echo "</div>";
      echo "</div>";    
  }


function setfooter(){
      echo "</body>";
      echo '<footer class ="footer">';
      echo "<br>";
      echo '<div class ="infomation-footer">';
      echo "<h4>Website infomation</h4>";
      echo '<a href="">About us</a>';
      echo "<br>";
      echo '<a href="">Contact us</a>';
      echo "<br>";
      echo '<a href="">Privacy policy</a>';
      echo "<br>";
      echo '<a href="">Terms</a>';
      echo "</div>";
      echo '<div class ="account">';     
      echo "<h4>Account</h4>";
      echo  '<a href="register.php">register</a>';
      echo  "<br>";
      echo '<a href="login.php">login</a>';
      echo "<br>";
      echo  '<a href="welcome.php">view profile</a>';
      echo "</div>";
      echo '<div class="products-footer">';
      echo "<h4>Products</h4>";
      echo '<a href="register.php">View products</a>';
      echo "<br>";
      echo '<a href=""></a>';
      echo "<br>";
      echo '<a href=""></a>';
      echo "</div>";
      echo  '<div class ="socal-media-icons">';    
      echo "<h4>Socal media</h4>";
      echo '<a href="#" class="fa fa-facebook"></a>';
      echo '<a href="#" class="fa fa-twitter"></a>';
      echo '<a href="#" class="fa fa-youtube"></a>';
      echo '<a href="" class="fa fa-instagram"></a>';
      echo "</div>";
      echo '<div class ="copyright-footer">';
      echo "<P></p>";
      echo "</div>";
      echo "</footer>";
      echo "</html>";
}
}
?>