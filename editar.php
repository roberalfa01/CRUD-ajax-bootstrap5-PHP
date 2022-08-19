<?php

require_once "Conectar.php";
$conectar = new Conectar();

$pdo = $conectar->conexion();
$id = $_POST['id'];

$sql = "select * from personas where id='$id'";
$resultado = $pdo->prepare($sql);
$resultado->execute();

$data = $resultado->fetchAll();

echo json_encode($data);