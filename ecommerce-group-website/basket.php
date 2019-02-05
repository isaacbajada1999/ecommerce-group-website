<?php session_start();?>
<?php
  include('common.php');
  setHead("Basket page");
?>
<body>
<?php
  setMenuBar();
?>
<?php 
include 'php-mongo/connection.php';
         if(isset($_SESSION['username'])){
           $_SESSION['username'];

          

          }else {
             header("Location:login.php");

         }
?>

<?php
  setfooter();
?>
