<?php session_start();?>
<?php
  include('common.php');
  setHead("Products  page");
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
<br>
<br>
<br>
<br>
<br>
<br>
<?php
  setfooter();
?>