<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="">Documento</label>
                    <input type="text" name="Documento" class="form-control">
                    <label for="">Nombres</label>
                    <input type="text" name="Nombres" class="form-control">
                    <label for="">Correo</label>
                    <input type="text" name="Correo" class="form-control">
                    <label for="">Telefono</label>
                    <input type="text" name="Telefono" class="form-control">
                    <label for="">Direccion</label>
                    <input type="text" name="Direccion" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
