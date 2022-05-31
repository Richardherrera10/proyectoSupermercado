@extends("layout.layout")
@section("title", "Cliente {$cliente->id}" )

@section("content")
    <div id="detallesProducto">
        <ul class="list-group">
            <li id="titulo" class="list-group-item"> <strong>CLIENTE SELECCIONADO </strong></li>
            <li class="list-group-item list-group-item-primary"> <strong> Nombre Cliente </strong> {{$cliente->nombreCompleto}}</li>
            <li class="list-group-item list-group-item-warning"> <strong> NIT: </strong>{{$cliente->NIT}}</li>
            <li class="list-group-item list-group-item-success"> <strong> Dirección: </strong> {{$cliente->direccion}}</li>
        </ul>
    </div>
@endsection
