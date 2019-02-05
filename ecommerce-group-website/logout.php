<?php
session_start();

unset($_SESSION["username"]);
unset($_SESSION['errormsg']);
header("Location:login.php");
?>