<?php session_start();?>
<?php
  include('common.php');
  setHead("Register  page");
?>
<body background="static/images/register-background.jpg">
<?php
  setMenuBar();
?>

<div id="register-form">
<form action="php-mongo/register_user.php" id="register_form" method="POST">
  <br>
  <div id="register-heading">
  <h1>Join us now</h1>
</div>
  <div id="register-inputs">
    <p>Username</p>
    <input type="text" name="username" placeholder="Enter a Username"  id="username" required>
    <td><span  class="error-form" id="username_error" ></span></td>
    <p>Email</p>
    <input type="email" name="email" placeholder="Enter your Email"  id="email" required>
    <td><span id="email_error"></span></td>
    <p>Address</p>
    <input type="address" name="address" placeholder="Enter your Address" id="address-input" required>
    <p>Password</p>
    <input type="Password" name="password" placeholder="•••••••"  id="password" required>
    <td><span id="password_error"></span></td>
    <p>Retype password</p>
    <input type="Password" name="" placeholder="•••••••" id="retype_password_input" required>
    <td><span  id="retype_password_error"></span></td></tr>
  </div>
    <br>
    <div id="terms-and-privacy">
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  </div>
    <br>
    <div id = "register-button">
      <input type ="submit" name="" value="Join now" class="register-btn">
  </div>
    </form>
</div>
</div>
<br>
 <script type="text/javascript" language="javascript" src="js/register.js"></script>
</body>
</html>






