<?php

require_once "database/dbclass.php";

$sql = new sqlsrv();

var_dump($sql->json_runSP('spEjemplo',array('13')));