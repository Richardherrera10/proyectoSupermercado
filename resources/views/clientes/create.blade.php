@extends("layout.layout")
@section("title", "Crear Cliente")

@section("content")

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Añadir nuevo cliente</h2>
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

    <form action="{{route("clientes.store")}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong> Nombre Cliente:</strong>
                    <input type="text" name="nombreCompleto" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> NIT: </strong>
                    <input type="text" name="NIT" class="form-control" placeholder="número de nit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Direccion</strong>
                    <textarea name="direccion" class="form-control" placeholder="direccion completa"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </div>

    </form>
@endsection
