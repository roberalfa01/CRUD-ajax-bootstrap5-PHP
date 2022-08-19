<?php

require_once "Conectar.php";

$conectar = new Conectar();
$pdo = $conectar->conexion();

$id = $_POST['id'];
//$id = "7106577";

//eliminar el registro
$sql = "delete from personas where id='$id'";
$resultado = $pdo->prepare($sql);
$resultado->execute();

//el nuevo select sin el eliminado
$sql = "select * from personas order by fecha_incorporacion desc";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$data = $resultado->fetchAll();


echo json_encode($data);

