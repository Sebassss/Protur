<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 31/01/2017
 * Time: 11:50 AM
 */

require_once "../database/dbclass.php";

$sql = new sqlsrv();

$q = $sql->json_query("
    SELECT
	  ID,
      Fecha,
      Nombre,
      Apellido,
      Sexo,
      FechaNacimiento,
      Departamento,
      Localidad,
      Telefono1,
      Telefono2,
      Email,
      Comentarios

     FROM PersonaProturGE
");