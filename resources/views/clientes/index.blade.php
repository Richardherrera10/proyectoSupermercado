@extends("layout.layout")
@section("title", "Clientes")

@section("content")

    <div class="pull-left" id="clientes">
        <h2> CLIENTES (Si desea editar inicie sesión) </h2>
    </div>
    @auth
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('clientes.create')}}"> Agregar nuevo cliente</a>
            </div>
        </div>
    </div>
    @endauth
    <table class="table table-dark">
        <tr>
            <th> No. </th>
            <th> nombre </th>
            <th> NIT </th>
            <th> Direccion </th>
            @auth
            <th width="280px"> Acción </th>
            @endauth
        </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$cliente ->nombreCompleto}}</td>
                <td>{{$cliente ->NIT}}</td>
                <td>{{$cliente ->direccion}}</td>
                @auth
                <td>
                    <form action="{{route("clientes.destroy", $cliente ->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route("clientes.show", $cliente ->id)}}"> Mostrar</a>
                        <a class="btn btn-primary" href="{{route("clientes.edit", $cliente ->id)}}"> Editar</a>
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger"> Eliminar</button>
                    </form>
                </td>
                @endauth
            </tr>
        @endforeach
    </table>
@endsection
