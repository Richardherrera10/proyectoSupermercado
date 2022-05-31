@extends("layout.layout")
@section("title", "Productos")

@section("content")
    <div id="detallesProducto">
        <ul class="list-group">
            <li id="titulo" class="list-group-item"> <strong>PRODUCTO SELECCIONADO </strong></li>
            <li class="list-group-item list-group-item-primary"> <strong> Producto: </strong> {{$producto->nombre}}</li>
            <li class="list-group-item list-group-item-warning"> <strong> Precio: Q.</strong>{{$producto->precio}}</li>
            <li class="list-group-item list-group-item-success"> <strong> Descripción: </strong> {{$producto->descripcion}}</li>
        </ul>
    </div>
@endsection
