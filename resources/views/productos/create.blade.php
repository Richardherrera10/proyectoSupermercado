@extends("layout.layout")
@section("title", "Productos")

@section("content")

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Añadir nuevo Producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('productos.index')}}"> Regresar</a>
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

    <form action="{{route("productos.store")}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong> Nombre Producto:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Precio</strong>
                    <input type="text" name="precio" class="form-control" placeholder="precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> descripcion</strong>
                    <textarea name="descripcion" class="form-control" placeholder="descripcion"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Subir</button>
            </div>
        </div>

    </form>
@endsection
