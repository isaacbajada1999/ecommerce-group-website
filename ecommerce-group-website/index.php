<?php session_start();?>
<?php
  include('common.php');
  setHead("Home page");
?>
<script type="text/javascript" id="cookieinfo"	
 	type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js"
	data-bg="#3937a3"
	data-fg="#FFFFFF"
	data-link="#F1D600"
	data-cookie="CookieInfoScript"
	data-text-align="left"
    data-close-text="Accept"
    data-message="we use cookies to understand how you use our webesite and to improve your experience"
    data-bg="#396"
    data-moreinfo="https://cookiesandyou.com/">
</script>
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
<div class="home-heading-img">
	<img src="static/images/home-cover.jpg">
</div>
<div id="home-page-heading">
<h1>Welcome to Undine's Quest<br> in game content store</h1>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
  setfooter();
?>
