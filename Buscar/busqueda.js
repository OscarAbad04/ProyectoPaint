$(obtener_registros());

function obtener_registros(lote)
{
	$.ajax({
		url : 'Buscar/consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { lote: lote },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);

		$("body").on("click",".eliminar",function(){
		alert("has eliminado un registro");
		console.log("click");
	});

	})


}


$(document).on('keyup', '#busqueda', function()
{
	
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});





