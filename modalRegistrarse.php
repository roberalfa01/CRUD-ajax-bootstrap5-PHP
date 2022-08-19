 <!-- Modal registrarse-->
 <div class="modal fade" id="modalRegistrarse" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="modalLabel">Registrar Persona</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="formRegistrarse">
                    <div class="form-group mb-3">
                        <label for="codigo">Codigo Cliente</label>
                        <input type="text" name="codigo" id="codigo" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="profesion">Profesión</label>
                        <input type="text" name="profesion" id="profesion" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="fecha">Fecha de Nacimiento</label>
                        <input type="date" name="fecha" id="fecha" class="form-control"> 
                    </div>
                    <div class="form-group text-center">
                        <button type="button" id="botonRegistrarse" class="btn btn-secondary form-control">Grabar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
