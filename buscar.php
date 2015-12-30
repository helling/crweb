<? session_start();?>
<?php if(isset($_SESSION['usuario'])){
header("location:/cruz%20roja/index.php");
}
if(!isset($_COOKIE["log"])){
	header("location:/cruz%20roja/index.php");
}
?>
<html>
<head>
<title>biografia</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="banner">
<div id="login">
<?php 
 echo $_COOKIE["log"];?>
  <a href="logout.php">salir</a>
  </div><div><img src="img/logo-banner.png"></div></div>
  <center>
  <form action="operaciones/busqueda.php" method="post">
  <div id="form">
  <div id="label">buscar</div><input type="text" id="us" name="user"><br><input type="submit"  id="btn" name="btn" value="enviar"/>
  </div>
  </form>
  </center>
</body>
</html>

