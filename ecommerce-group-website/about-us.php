<?php session_start();?>
<?php
  include('common.php');
  setHead("About us page");
?>

<body>
<?php
  setMenuBar();
?>
<?php 
include 'php-mongo/connection.php';
         if(isset($_SESSION['username'])){
           $_SESSION['username'];

          }
?>

<div id="about-us-heading">
<h1>About us</h1>
</div>
<div id="about-us">
<h2>Our addons</h2>
<img src="static/images/addons-icon.png">
</div>
<div id="who-we-are">
	<h2>Who we are&quest;</h2>
<img src="static/images/who-we-are-icon.png">
</div>
<div id="our-users">
	<h2>Our users</h2>
	<img src="static/images/our-users.png">
</div>

<br>

<?php
  setfooter();
?>