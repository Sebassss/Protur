<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 27/01/2017
 * Time: 11:30 AM
 */

?>


<div class="row">
    <div class="col-xs-12">
        <h2 class="page-header">
            <i class="fa fa-user"></i> Solicitudes de contacto.
<!--            <small class="pull-right">30/01/2017</small>-->
        </h2>
    </div>
</div>


<div class="box box-primary">
<!--    <section class="content-header">-->
<!--        <h1>Solitudes de contacto por web</h1>-->
<!--    </section>-->

    <section class="content">
        <div id="table"  ></div>


    </section>

</div>


<script>

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
</script>