Lista de productos

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $produ)
        <tr>
            <td>{{ $produ->id }}</td>
            <td>{{ $produ->name }}</td>
            <td>{{ $produ->description }}</td>
            <td>{{ $produ->price }}</td>
            <td>
                <form method="POST" action="{{ url('/produ/'. $produ->id) }}">
                @csrf
                <a href="{{ url('/produ/'. $produ->id . '/edit') }}">Editar</a>
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbodyt
</table>