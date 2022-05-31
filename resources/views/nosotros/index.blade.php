@extends("layout.layout")
@section("title", "Nosotros")
@section("content")

    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">HISTORIA</h2>
                    <p class="font-italic text-muted mb-4">Supermercado La bendición es una empresa que nació en 2020 en Quiché, Guatemala y fue fundada por el Sr. Alexis Ortiz tras la necesidad de supermercados más económicos en la región.
                        Debido a la gran demanda por nuestros productos hemos espezado los planes de expansión a otros departamentos aledaños al Quiché</p>
                </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img height="20px" src={{URL::asset('/img/historia.png')}} alt="" class="img-fluid mb-4 mb-lg-0" ></div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">NUESTRO COMPROMISO</h2>
                    <p class="font-italic text-muted mb-4">Mejorar la calidad de vida de todas las familias guatemaltecas llevando calidad y modernidad a sus hogares.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5">
                    <h2 class="display-4 font-weight-light">NUESTROS PRINCIPIOS</h2>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src={{URL::asset('/img/recycle.png')}} alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Reutilización</h5><span class="small text-uppercase text-muted">Para el medio ambiente</span>
                        <h5> No utilizamos bolsas desechables para reducir la contaminación y así aportar nuestro grano de arena.</h5>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src={{URL::asset('/img/equality.png')}} alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Igualdad</h5><span class="small text-uppercase text-muted"> Trato a todos por igual</span>
                        <h5> En nuestras sucursales se sirve a cada persona por igual sin importar su raza, religión o sexualidad.</h5>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img  src={{URL::asset('/img/servicial.png')}} alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Serviciales</h5><span class="small text-uppercase text-muted"> A nuestros clientes</span>
                        <h5> Nos centramos 100% en el servicio al cliente para que se garantice una experiencia positiva en todas nuestras sucursales.</h5>
                    </div>
                </div>
                <!-- End-->


            </div>
        </div>
    </div>

@endsection
