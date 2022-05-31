<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @yield("assets")
    @yield("asset_form_job")
    <link rel="stylesheet" href="{{url("css/index.css")}}">
</head>
<body>
<div id="page-container">
    <div id="content-wrap">
        <!-- all other page content -->
        <div class="navigation">
            <nav class="pestañas">
                <nav id="opciones"class="navbar navbar-expand-lg navbar-light bg-light py-3">
                    <div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong></strong></a>
                        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a href="{{route("welcome.index")}}" class="nav-link font-italic"> Inicio </a></li>
                                <li class="nav-item active"><a href="{{route("nosotros.index")}}" class="nav-link font-italic"> Acerca de Nosotros </a></li>
                                <li class="nav-item active"><a href="{{route("productos.index")}}" class="nav-link font-italic"> Productos </a></li>
                                <li class="nav-item active"><a href="{{route("clientes.index")}}" class="nav-link font-italic"> Clientes</a></li>
                                <li class="nav-item active"><a href="{{route("empleos.index")}}" class="nav-link font-italic"> Empleos</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </nav>


            <!-- login modal-->
            <div class="buttons">
                
            @auth
                <div class="user">
                    <h1>
                        <span class="font-bold uppercase">
                        Bienvenido <span style="color:rgb(12, 36, 121)">{{auth()->user()->name}}</span>
                        </span>
                    </h1>
                
                    <form class="inline" method="POST" action="/logout">
                    @csrf
                        <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
                    </form>
                </div>
                
            @else
                <a href="{{route("users.login")}}">
                    <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                </a>
                <a href="{{route("users.register")}}">
                    <button type="button" class="btn btn-warning">Regístrate</button>
                </a>
            @endauth
                
                
            </div>
        </div>

        <div class="container">
            <div>
                @if(session()->has('message'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                  class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-black px-48 py-3">
                  <div class="alert alert-info">
                    <p>
                        {{session('message')}}
                    </p>
                  </div>
                </div>
                @endif
            </div>
            <!-- title-->
            <h1 id="superMercado"> SuperMercado La Bendición </h1>



        </div>

        @yield("content")
    </div>


    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="">
        <!-- Footer -->
        <footer
            class="text-center text-lg-start text-dark"
            style="background-color: #ECEFF1"
        >
            <!-- Section: Social media -->
            <section
                class="d-flex justify-content-between p-4 text-white"
                style="background-color: #21D192"
            >
                <!-- Left -->

                <!-- Left -->

                <!-- Right -->

                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Supermercado La Bendicion</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                            <p>
                                El supermercado al alcance de tus manos y más barato a tu alrededor.
                            </p>
                        </div>
                        <!-- Grid column -->





                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contacto</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                            <p><i class="fas fa-home mr-3"></i> +(502) 4956 8371 </p>
                            <p><i class="fas fa-envelope mr-3"></i> 45 ave. 3-89 zona 4 Mixco</p>
                            <p><i class="fas fa-phone mr-3"></i>  labendicion@gmail.com </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div
                class="text-center p-3"
                style="background-color: rgba(0, 0, 0, 0.2)"
            >
                © 2022 Copyright:
                <a class="text-dark"
                >Supermercado La Bendicion</a
                >
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->

</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>


</body>


</html>
