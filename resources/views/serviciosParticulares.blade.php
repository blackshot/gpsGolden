@extends('layouts.appServicios')

@section('titulo', 'GPS Golden')

@section('cuerpo')

    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=56989786733" target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
        </a>
    </div>
    
    <section class="datos-seccion-servicios-particulares">
        <div class="container">
            <div class="row">
                <div class="col mt-3 mb-3">
                    <h2 class="text-center texto-amarillo">Servicio para particulares</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="accordion">

                        <div class="card card-custom-services mb-2">
                            <div class="card-header" id="heading-1">
                                <h3 class="mb-0 text-center">
                                    <button class="btn btn-link titulo-datos-servicios" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Características
                                    </button>
                                </h3>
                            </div>
                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <h6>Ubicación en tiempo real.</h6>
                                    <h6>Cortacorriente sin distancia mínima.</h6>
                                    <h6>Disponibilidad 24/7.</h6>
                                    <h6>Asistencia telefónica las 24 horas.</h6>
                                    <h6>Gestión para recupación del vehículo en caso de robo</h6>
                                </div>
                            </div>
                        </div>

                        <div class="card card-custom-services mb-2">
                            <div class="card-header" id="heading-2">
                                <h3 class="mb-0 text-center">
                                    <button class="btn btn-link titulo-datos-servicios" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                        Instalamos tu GPS
                                    </button>
                                </h3>
                            </div>
                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <h6>Agenda la fecha y hora para la instalación de tu despositivo GPS.</h6>
                                    <h6>En 40 minutos equiparemos tu auto para que quede protegido. Mientras esperas, nostros nos ponemos con la bebida.</h6>
                                </div>
                            </div>
                        </div>

                        <div class="card card-custom-services mb-2">
                            <div class="card-header" id="heading-3">
                                <h3 class="mb-0 text-center">
                                    <button class="btn btn-link titulo-datos-servicios" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                        Contrata tu plan
                                    </button>
                                </h3>
                            </div>
                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <h6>Muy simple! Por solo $4.990 pesos al mes podrás tener tu auto protegido las 24 horas del día.</h6>
                                    <h6>Te llevamos la tecnología que usan las mejores empresas al alcance de tu mano.</h6>
                                </div>
                            </div>
                        </div>

                        <div class="card card-custom-services mb-2">
                            <div class="card-header" id="heading-4">
                                <h3 class="mb-0 text-center">
                                    <button class="btn btn-link titulo-datos-servicios" data-toggle="collapse" data-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                        Vigila tu auto 24/7
                                    </button>
                                </h3>
                            </div>
                            <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <h6>Ahora puedes ver donde está tu auto las 24 horas del día.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h2 class="texto-amarillo text-center">Valores</h2>
                    <h5 class="text-danger text-center">VALORES NO INCLUYEN IVA</h5>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 mt-3">
                    <div class="card card-color-principal">
                        <div class="card-body">
                            <h4 class="card-title text-center title-card-prices"><b>Instalación</b></h4>
                            <h5 class="card-text text-center">$49.990</h5>
                            </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                    <div class="card card-color-principal">
                        <div class="card-body">
                            <h4 class="card-title text-center title-card-prices">Monitoreo 24/7</h4>
                            <h5 class="card-text text-center">$4.990</h5>
                            <h5 class="card-text text-center">Mensuales</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                    <div class="card card-color-principal">
                        <div class="card-body">
                            <h4 class="card-title text-center title-card-prices">Inmovilizador</h4>
                            <h5 class="card-text text-center">$35.000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection