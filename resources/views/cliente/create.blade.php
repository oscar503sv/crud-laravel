<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id="nombre"
                aria-describedby="helpId"
                placeholder="Ingrese su nombre"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input
                type="text"
                class="form-control"
                name="telefono"
                id="telefono"
                aria-describedby="helpId"
                placeholder="Ingrese su telefono"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Correo</label>
            <input
                type="email"
                class="form-control"
                name="correo"
                id="correo"
                aria-describedby="helpId"
                placeholder="Ingrese su correo electronico"/>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    </div>
    </div>
</div>