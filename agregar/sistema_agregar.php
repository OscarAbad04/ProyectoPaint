<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Agregar registro</title>
	<script src="evi/jquery-3.5.1.min.js"></script>
	<script src="evi/eviAJ.js"></script>
	<link rel="stylesheet" href="agre.css">
</head>
<body>
	<div class="con">
		<h1>sistema de inserxion de datos del lote</h1>
	</div>
	
	
	<form class="secon" method="post">
		<h2>Nombre del lote</h2>
		
		<input type="text" name="Nombre_Lote" placeholder="Nombre_Lote">

		<h2>Colonia</h2>

		<input type="text" name="Colonia" placeholder="Colonia">

		<h2>Tienda de pintura</h2>

		<input type="text" name="Tienda_Pintura" placeholder="Tienda_Pintura">

		<h2>Constructora</h2>

		<input type="text" name="Constructora" placeholder="Constructora">

		<h2>Fecha de inicio</h2>

		<input type="text" name="Fecha_Inicio" placeholder="Fecha_Inicio">

		<h2>Ultimo dia de trabajo</h2>

		<input type="text" name="Fecha_Ultimo_dia_Trabajo" placeholder="Fecha_Ultimo_dia_Trabajo">

		<h2>Equipo de Trabajo</h2>
		        
		<input type="text" name="Equipo_de_Trabajo" placeholder="Equipo_de_Trabajo">

		<h2>Colores</h2>

		<input type="text" name="Colores" placeholder="Colores">

		<h2>Observaciones</h2>

		<input type="text" name="Observaciones" placeholder="Observaciones">

		<input type="submit" name="register">

		
	</form>

	<h2>EVIDENCIAS</h2>

	<form action="files.php" method="post" enctype="multipart/form-data" id="filesForm">
    <div>
        <input class="form-control" type="file" name="file[]" multiple>
        <button type="button" onclick="subir()">Cargar</button>
    </div>
</form>
	

	 <?php 
        include("registrar.php");
       // include("inserIMG.php");
        ?>

</body>
</html>