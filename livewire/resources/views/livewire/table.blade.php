<h1>Listado de Posts</h1>

<table class="table">
    <thead>
        <tr>
           
            <th>Nombre</th>
            <th>Teléfono</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->telefono }}</td>
                <td>{{ $item->fecha }}</td>
                <td>
                    <button wire:click="edit({{ $item->id }})" class="btn btn-primary">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click="destroy({{ $item->id }})" class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}