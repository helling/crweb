<? session_start();?>
<?php if(isset($_SESSION['usuario'])){
header("location:/cruz%20roja/index.php");
}
if(!isset($_COOKIE["log"])){
	header("location:/cruz%20roja/index.php");
}
?>
<?
ini_set("display_errors",1);
include("/coneccion/mysql.inc.php");
$user = $_POST["user"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registros</title><link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

<body>
<div id="banner">
<div id="login">

<?php 
 echo $_COOKIE["log"];?><a href="../logout.php">salir</a>
  </div>
  </div>
  <div id="lista">a</div>
</body>
</html>