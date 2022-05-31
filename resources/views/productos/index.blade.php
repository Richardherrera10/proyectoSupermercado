@extends("layout.layout")
@section("title", "Productos")

@section("content")

    <div class="pull-left" id="productos">
        <h2>PRODUCTOS (Si desea editar inicie sesión) </h2>
    </div>
    @auth
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{route('productos.create')}}"> Crear nuevo producto</a>
                </div>
            </div>
        </div>
    @endauth

    <table class="table table-dark">
        <tr>
            <th> No. </th>
            <th> nombre </th>
            <th> precio (Q.) </th>
            <th> descripcion </th>
            @auth
            <th width="280px"> Acción </th>
            @endauth
        </tr>
    @foreach($productos as $producto)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$producto ->nombre}}</td>
            <td>{{$producto ->precio}}</td>
            <td>{{$producto ->descripcion}}</td>
            @auth
            <td>
                <form action="{{route("productos.destroy", $producto ->id)}}" method="POST">
                    <a class="btn btn-info" href="{{route("productos.show", $producto ->id)}}"> Mostrar</a>
                    <a class="btn btn-primary" href="{{route("productos.edit", $producto ->id)}}"> Editar</a>
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
