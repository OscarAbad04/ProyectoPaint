<?php 

include("conex.php");

if (isset($_POST['register'])) {

    if (strlen($_POST['Nombre_Lote']) >= 1 && strlen($_POST['Colonia']) >= 1 && strlen($_POST['Tienda_Pintura']) >= 1 && strlen($_POST['Constructora']) >= 1 && strlen($_POST['Fecha_Inicio']) >= 1 && strlen($_POST['Fecha_Ultimo_dia_Trabajo']) >= 1 && strlen($_POST['Equipo_de_Trabajo']) >= 1 && strlen($_POST['Colores']) >= 1 && strlen($_POST['Observaciones']) >= 1) {

	   
	   	
	    $Nombre_Lote = trim($_POST['Nombre_Lote']);
	    $Colonia = trim($_POST['Colonia']);
	    $Tienda_Pintura = trim($_POST['Tienda_Pintura']);
	    $Constructora = trim($_POST['Constructora']);
	    $Fecha_Inicio = trim($_POST['Fecha_Inicio']);
	    $Fecha_Ultimo_dia_Trabajo = trim($_POST['Fecha_Ultimo_dia_Trabajo']);
		$Equipo_de_Trabajo = trim($_POST['Equipo_de_Trabajo']);
		$Colores = trim($_POST['Colores']);
		$Observaciones = trim($_POST['Observaciones']);


	    $consulta = "INSERT INTO lote (Nombre_Lote, Colonia, Tienda_Pintura, Constructora, Fecha_Inicio, Fecha_Ultimo_dia_Trabajo, Equipo_de_Trabajo, Colores, Observaciones) VALUES ('$Nombre_Lote', '$Colonia', '$Tienda_Pintura', '$Constructora', '$Fecha_Inicio', '$Fecha_Ultimo_dia_Trabajo', '$Equipo_de_Trabajo', '$Colores', '$Observaciones')";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡has realizado el registro correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}


?>

