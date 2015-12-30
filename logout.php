<?php
session_start();
setcookie("log", null, time()+1);
session_unset($_SESSION['usuario']);
session_destroy();
header("location:/cruz%20roja/index.php");
?>