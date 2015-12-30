<?php
include("/coneccion/mysql.inc.php");
$pass = $_POST["ps"];
$user = $_POST["us"];
ini_set("display_errors",1);
echo "<br>";
//conectar
if (!$enlace = mysql_connect('localhost', 'lin', '58521156')) {
    echo 'No pudo conectarse a mysql'; 
    exit;
}
//verifica si el resultado no es null o vacio
if (!mysql_select_db('cr', $enlace)) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}
if($pass == "" && $pass == null){
	echo "error, contraseña vacia";echo "<br>";header('Location:/cruz%20roja/index.php');
	die();
}
if($user == "" && $user == null){
	echo "error, usuario vacio";echo "<br>";header('Location:/cruz%20roja/index.php');
	die();
	}
	$sql       = 'SELECT nombre FROM usuario where pass= '.$pass.';';
	$resultado = mysql_query($sql, $enlace);
	if (mysql_num_rows($resultado))
{
while ($fila = mysql_fetch_assoc($resultado)) {
	
		if($fila['nombre']==$user){
	
	session_start();
$_SESSION['usuario'] =  $user;
//setcookie("log", sha1($user), time()+3600);
setcookie("log", $user, time()+3600);
header('Location:/cruz%20roja/buscar.php');
//setcookie("TestCookie", $user, time()+3600);  /* expira en una hora */
//setcookie("TestCookie", $user, time()+3600, "/~rasmus/", "example.com", 1);
	break;		
	
	}else{		header('Location:/cruz%20roja/index.php');}
}  }
else
{ header('Location:/cruz%20roja/index.php'); }
?>
