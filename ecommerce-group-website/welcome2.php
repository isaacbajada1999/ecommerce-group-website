
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
            

            }else {
            
       		  
            }
        
          ?>
</div>

<?php
  setfooter();
?>

