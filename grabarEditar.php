<?php

require_once "Conectar.php";
$conectar = new Conectar();

$pdo = $conectar->conexion();

$id = $_POST['idEditar'];
$codigo = $_POST['codigoEditar'];
$nombre = $_POST['nombreEditar'];
$apellido = $_POST['apellidoEditar'];
$profesion = $_POST['profesionEditar'];
$fechaEditar = $_POST['fechaEditar'];
if ($fechaEditar != "")
{
    $fechaEditar = date('Y-m-d', strtotime($_POST["fechaEditar"]));
}else{
    $fechaEditar = "";
}

$sql = "update personas set codigo=?, nombre=?, apellido=?, profesion=?, fecha_nacimiento=? where id=?";
$resultado = $pdo->prepare($sql);
$resultado->execute([$codigo, $nombre, $apellido, $profesion, $fechaEditar, $id]);

//el nuevo select recargado para la tabla
$sql = "select * from personas order by fecha_incorporacion desc";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$data = $resultado->fetchAll();


echo json_encode($data);