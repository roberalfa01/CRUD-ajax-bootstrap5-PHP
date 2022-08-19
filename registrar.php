<?php

require_once "Conectar.php";
$conectar = new Conectar();
$pdo = $conectar->conexion();

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$profesion = $_POST['profesion'];
$fecha_nacimiento = $_POST['fecha'];
$fechaActual = date("Y-m-d H:i:s");

//buscar codigo a ver si ya existe
$sql = "select codigo from personas where codigo='$codigo'";
$resultado = $pdo->prepare($sql);
$resultado->execute();
if($resultado->rowCount() < 1)
{
    //graba registro si no existe
    $data = [
        'codigo' => $codigo,
        'nombre' => $nombre,
        'apellido' => $apellido,
        'profesion' => $profesion,
        'fecha_nacimiento' => $fecha_nacimiento,
        'fecha_incorporacion' => $fechaActual,
    ];
    $sql = "insert into personas (codigo, nombre, apellido, profesion, fecha_nacimiento, fecha_incorporacion) value (:codigo, :nombre, :apellido, :profesion, :fecha_nacimiento, :fecha_incorporacion )";
    $resultado = $pdo->prepare($sql);
    $resultado->execute($data);
    $comentario = "Codigo Grabado";
}else{
    $comentario = "Codigo ya existe no se puede registrar";
}

//preparar nueva consulta
$sql = "select * from personas order by fecha_incorporacion desc";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$data = $resultado->fetchAll();
echo json_encode($data);