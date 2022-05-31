@extends("layout.layout")
@section("title", "Editar Cliente")

@section("content")

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Cliente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('clientes.index')}}"> Regresar</a>
            </div>
        </div>
    </div>

    @if ($errors -> any())
        <div class="alert alert-danger">

            <strong> Hubo un problem en su entrada </strong><br><br>
            <ul>
                @foreach($errors -> all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('clientes.update', $cliente->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Nombre Producto:</strong>
                    <input type="text" name="nombreCompleto" value="{{$cliente->nombreCompleto}}" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Precio</strong>
                    <input type="text" name="NIT" value="{{$cliente->NIT}}" class="form-control" placeholder="precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> descripcion</strong>
                    <textarea name="direccion" class="form-control" >{{$cliente->direccion}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Subir</button>
            </div>
        </div>

    </form>
@endsection
