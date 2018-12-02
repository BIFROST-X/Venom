<?php 
session_destroy();
unset($_SESSION['l1']);
$_SESSION['message']="You are now logged out";
header("location:blogin.php");
?>
