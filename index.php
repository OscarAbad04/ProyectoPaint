<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">

	<title>login</title>
	
</head>
<body>
	<form action="validar.php" method="post">
	<h1>Sistema de Login</h1>
	<p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>

   <input type="submit" value="Ingresar">	

   </form>
	
</body>
</html>