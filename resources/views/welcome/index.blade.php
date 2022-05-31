@extends("layout.layout")
@section("title", "La Bendición")
@section("content")
    <!-- slider-->
    <h1 id="bienvenido">¡Bienvenido!</h1>
    <div class="restriction">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src={{URL::asset('/img/super.jpg')}} >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="" src={{URL::asset('/img/productos.png')}} >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="" src={{URL::asset('/img/descuento.jpg')}} >
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <h1 id="vacunar"> <marquee scrolldelay="0.01"> Vacunate contra el covid </marquee> </h1>
    <div class="extras">
        <a href="https://yomevacuno.gob.gt/">
            <div id="uno">
                <img class="d-block w-100" alt="" src={{URL::asset('/img/yovacuno.jpg')}} >
            </div>
        </a>

        <div id="dos">

            <img class="d-block w-100" alt="" width="40px" src={{URL::asset("/img/vacuna2.jpg")}}  >

        </div>

        <div id="tres">
            <img class="d-block w-100" alt="" id="2por1"src={{URL::asset("/img/2por1.jpg")}}  >

        </div>

    </div>
    <div id="space">

    </div>
@endsection
