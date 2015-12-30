<?php $mysqli = new mysqli("localhost", "lin", "58521156", "cr",3306);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
//echo "correcta";	
}?>
