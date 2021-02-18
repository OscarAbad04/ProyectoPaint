<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'ruizpaint';
$usuario = 'pracTecno';
$contraseña = 'Chevytuneado2021';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);

//var_dump($conexion);
 //exit();

if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM lote ORDER BY id_Lote";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['lote']))
{
	$q=$conexion ->real_escape_string($_POST['lote']);
	$query="SELECT * FROM lote WHERE 
		id_Lote LIKE '%".$q."%' OR
		Nombre_Lote LIKE '%".$q."%' OR
		Colonia LIKE '%".$q."%' OR
		Tienda_Pintura LIKE '%".$q."%' OR
		Constructora LIKE '%".$q."%' OR
		Fecha_Inicio LIKE '%".$q."%' OR
		Fecha_Ultimo_dia_Trabajo LIKE '%".$q."%' OR
		Equipo_de_Trabajo LIKE '%".$q."%'";
}

$buscarLote=$conexion->query($query);
if ($buscarLote ->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID LOTE</td>
			<td>NOMBRE LOTE</td>
			<td>COLONIA</td>
			<td>TIENDA DE PINTURA</td>
			<td>CONSTRUCTORA</td>
			<td>FECHA DE INICIO</td>
			<td>ULTIMO DIA DE TRABAJO</td>
			<td>EQUIPO DE TRABAJO</td>
			<td>COLORES</td>
			<td>OBSERVACIONES</td>
			<td>opciones</td>
		</tr>';

	while($filaLote= $buscarLote ->fetch_assoc())
	{
		$tabla.=
		'<tr class="color">
			<td>'.$filaLote['id_Lote'].'</td>
			<td>'.$filaLote['Nombre_Lote'].'</td>
			<td>'.$filaLote['Colonia'].'</td>
			<td>'.$filaLote['Tienda_Pintura'].'</td>
			<td>'.$filaLote['Constructora'].'</td>
			<td>'.$filaLote['Fecha_Inicio'].'</td>
			<td>'.$filaLote['Fecha_Ultimo_dia_Trabajo'].'</td>
			<td>'.$filaLote['Equipo_de_Trabajo'].'</td>
			<td>'.$filaLote['Colores'].'</td>
			<td>'.$filaLote['Observaciones'].'</td>
			<td><button class="eliminar" data-id="'.$filaLote['id_Lote'].'">ELIMINAR</button></td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
