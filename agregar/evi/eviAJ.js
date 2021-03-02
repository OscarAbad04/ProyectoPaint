 function subir()
    {

        var Form = new FormData($('#filesForm')[0]);
        $.ajax({

            url: "files.php",
            type: "post",
            data : Form,
            processData: false,
            contentType: false,
            success: function(data)
            {
                alert('Archivos Agregados!');
            }
        });
    }