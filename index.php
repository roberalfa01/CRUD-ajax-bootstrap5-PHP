<?php
    require_once "listar.php";
    require_once "modalRegistrarse.php";
    require_once "modalEditar.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Personas</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center bg-primary text-white py-4">
                    <h1>Sistema de Personas</h1>
                </div>

                <div class="col-md-10 my-3">
                    <!-- Button modal registrarse-->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalRegistrarse">Registrar Personal</button>
                </div>
                <div class="col-md-10 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Profesion</th>
                                <th>Nacimiento</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody id="respuesta">
                            <?php
                                foreach($data as $persona)
                                {
                            ?>
                                    <tr>
                                        <td><?=$persona['codigo']?></td>
                                        <td><?=$persona['nombre']?></td>
                                        <td><?=$persona['apellido']?></td>
                                        <td><?=$persona['profesion']?></td>
                                        <td><?=date('d-m-Y', strtotime($persona['fecha_nacimiento']))?></td>
                                        <td><a href="#" class="eliminar" id="<?=$persona['id']?>"><img src="assets/imagenes/eliminar.svg"></a></td>
                                        <td><a href="#" class="editar" id="<?=$persona['id']?>"><img src="assets/imagenes/editar.svg"></a></td>
                                    </tr>  
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>   
        
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/ajax.js"></script>
        
    </body>
</html>