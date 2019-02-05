 <?php
  include('common.php');
  setHead("Login page");
?>
<body background="static/images/login-background.jpg">

<?php
  setMenuBar();
?>

<div id="login-form">
<form action="php-mongo/login_user.php"  method="POST">
  <br>
  <div id="login-heading">
  <h1>Login</h1>
</div>
  <div id="login-inputs">
<?php

    session_start();           
   if (isset($_SESSION['errormsg']))
    
{

    echo "<p style='color:red; margin-left:38%; margin-top:-30px;'>";
    echo $_SESSION['errormsg'];
    echo "</p>";
    unset($_SESSION['errormsg']);
}  
?>
    <p>Username</p>
    <input type="text" id="username" name="username" placeholder="Enter your Username"  required>
    <p>Email</p>
    <input type="email" name="email" placeholder="Enter your email" id="email" required>
    <p>Password</p>
    <input type="Password" name="password" placeholder="•••••••" id="password" required>
  </div>
  <br>
  <div id = "login-button">
      <input type ="submit" name="submit" value="Login" class="login-btn">
  </div>
    <br>
    <div id="seperate-login">
    </div>
    <div id="login-with-social">
    <h2>Or login with your social media account</h2>
  </div>
    <br>
     <div class="social-media-login">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
         <br>
         <br>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <br>
        <br>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>
    </form>
  </div>
  <br>
</body>
</html>