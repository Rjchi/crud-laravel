<!-- Modal -->
<div class="modal fade" id="edit{{$usuario -> Documento}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('home.update', $usuario -> Documento)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label for="">Documento</label>
                    <input type="text" name="Documento" class="form-control" value="{{ $usuario -> Documento }}">
                    <label for="">Nombres</label>
                    <input type="text" name="Nombres" class="form-control" value="{{ $usuario -> Nombres }}">
                    <label for="">Correo</label>
                    <input type="text" name="Correo" class="form-control" value="{{ $usuario -> Correo }}">
                    <label for="">Telefono</label>
                    <input type="text" name="Telefono" class="form-control" value="{{ $usuario -> Telefono }}">
                    <label for="">Direccion</label>
                    <input type="text" name="Direccion" class="form-control" value="{{ $usuario -> Direccion }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete{{$usuario -> Documento}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('home.destroy', $usuario -> Documento)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Seguro que quiere eliminar este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
