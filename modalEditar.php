<!-- Modal editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="modalLabel">Modificar Persona</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="formEditar">
                    <div class="form-group mb-3">
                        <label for="codigo">Codigo Cliente</label>
                        <input type="text" name="codigoEditar" id="codigoEditar" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombreEditar" id="nombreEditar" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellidoEditar" id="apellidoEditar" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="profesion">Profesión</label>
                        <input type="text" name="profesionEditar" id="profesionEditar" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="fecha">Fecha de Nacimiento</label>
                        <input type="date" name="fechaEditar" id="fechaEditar" class="form-control"> 
                    </div>
                    <input type="hidden" name="idEditar" id="idEditar">
                    <div class="form-group text-center">
                        <button type="button" id="botonEditar" class="btn btn-secondary form-control">Grabar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
