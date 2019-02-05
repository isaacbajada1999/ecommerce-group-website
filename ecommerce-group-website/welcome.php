<?php session_start();?>
<?php
  include('common.php');
  setHead("Home page");
?>
<body>
<?php
  setMenuBar();
?>

 <?php include 'php-mongo/connection.php';?>

      <div id="user-info">
        <div class="container">
          <h1>welcome, 
          <?php 
            if(isset($_SESSION['username'])){
              echo $_SESSION['username'];
              echo "<br>";
              echo "<br>";
              echo "your user:";
              echo "<br>";
              echo "email:";
              echo $_SESSION['email'];
              echo "<br>";
              echo "<br>";
              echo "password:";
 			  echo $_SESSION['password'];

            }else {
             header("Location:login.php");
       		  
            }
        
          ?>
</div>



<?php
  setfooter();
?>