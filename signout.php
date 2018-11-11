<?php
session_start();
unset($_SESSION['UserName']);
unset($_SESSION['Password']);
unset($_SESSION['User']);
session_destroy();
header("Location:signin.php");
?>