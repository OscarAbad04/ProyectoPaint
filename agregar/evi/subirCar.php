<?php 
$msg = null;

if (isset($_POST["directorio"])) 
{

	$carpeta = htmlspecialchars($_POST["carpeta"]);
	$ruta = htmlspecialchars($_POST["ruta"]);
	$directorio = $ruta.$carpeta;

	if (!is_dir($directorio)) 
	{
		$crear = mkdir($directorio, 0777, true);

	if ($crear) 
		{
		$msg = "directorio creado correctamente";
		}
		else
		{
		$msg = "error al crear directorio";
		}

	}else{
		$msg = "la carpeta ya existe";
	}
}

 ?>
