/**
 * Created by Ivan on 31/01/2017.
 */


$(function(){

    $.ajax({
        url: "controllers/get_solicitudes.php",
        dataType: "json",
        method: "post",
        success: function(dataSet){

            $('#table').DataTable( {
                data: dataSet,
                columns: [
                    { index: 'ID', title: "ID" },
                    { index: 'DNI', title: "DNI" },
                    { index: 'Nombre', title: "Nombre" },
                    { index: 'Apellido', title: "Apellido" },
                    { index: 'Sexo', title: "Sexo" },
                    { index: 'FechaNacimiento', title: "FechaNacimiento" },
                    { index: 'Localidad', title: "Localidad" },
                    { index: 'Telefono1', title: "Telefono1" },
                    { index: 'Telefono2', title: "Telefono1" },
                    { index: 'Email', title: "Email" },
                    { index: 'Comentarios', title: "Comentarios" },
                    { index: 'Fecha', title: "Fecha" },
                    { index: 'Departamento', title: "Departamento" }
                ]
            } );
        }
    });



});