<?php
require('../classes/FunctionsLogin.class.php');
$usuario = new Usuarios();

$usuario->sairsessao();
header("location: ../index.php");
?>