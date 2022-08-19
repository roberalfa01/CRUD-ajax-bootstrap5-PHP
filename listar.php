<?php

require_once "conectar.php";
$conectar = new Conectar();
$pdo = $conectar->conexion();

$sql = "select * from personas order by fecha_incorporacion desc";
$resultado = $pdo->prepare($sql);
$resultado->execute();

$data = $resultado->fetchAll();
