<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/form-validator/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="js/valida.js"></script>
<body>

<center>
  
  <div id="form">
<div ><img src="img/logo-cuadrado.png" name="image" width="177" height="149" id="image" /></div>
<form action="validar.php" method="post">
<div id="label">usuario</div>
<div id="campo">  <input name="us" type="text" id="us" data-validation="length alphanumeric" data-validation-lenght-length="3-12"
     data-validation-error-msg="Usuario debe ser entre 3 y 12 caracteres"  /><div id="error_us"></div>
</div>
<br />
<div id="label">contraseña</div><div id="campo"> <input name="ps" type="password" id="ps" data-validation="length alphanumeric" data-validation-lenght-length="3-12" data-validation-error-msg="contraseña debe ser entre 3 y 12 caracteres" /><div id="error_ps"></div></div>
<br />
<input type="submit"  id="btn" name="btn" value="enviar"/>
</form>
</div>

</center>
</body>
</html>
