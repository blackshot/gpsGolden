@extends('layouts.app')

@section('titulo', 'GPS Golden')

@section('cuerpo')
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=56989786733" target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
        </a>
    </div>

    <section class="servicios">
        <div class="container">

            <div class="row pt-2">
                <div class="col">
                    <h1 class="text-center pt-5 mt-5 titulo-servicios" id="nuestros-servicios">Nuestros Servicios</h1>
                </div>
            </div>

            <div class="row pt-5 pb-5 text-center">

                <div class="col-md-4 mb-4">
                    <div class="card tarjeta">
                        <img src="{{ ('images/car1.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-title pt-3">
                            <h4>Particular</h4>
                        </div>
                        <div class="card-body">
                            <h6 class="card-text">Corta corriente</h6>
                            <h6 class="card-text">Bloqueo remoto</h6>
                            <h6 class="card-text">Uso de plataforma web</h6>
                            <h6 class="card-text">Inmovilizador</h6>
                            <br>
                            <a href="{{ route('servicioParticular') }}" class="btn btn-warning">Leer más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card tarjeta">
                        <img src="{{ asset('images/construction2.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-title pt-3">
                            <h4>Maquinaria/Construcción</h4>
                        </div>
                        <div class="card-body">
                            <h6 class="card-text">Bloqueo por desconexión de GPS</h6>
                            <h6 class="card-text">Bloqueo remoto</h6>
                            <h6 class="card-text">Geocercas ilimitadas</h6>
                            <h6 class="card-text">Resumen de flota</h6>
                            <h6 class="card-text">Sensor on/off</h6>
                            <br>
                            <a href="{{ route('servicioMquinariaConstruccion') }}" class="btn btn-warning">Leer más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card tarjeta">
                        <img src="{{ ('images/truck1.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-title pt-3">
                            <h4>Transporte de Carga</h4>
                        </div>
                        <div class="card-body">
                            <h6 class="card-text">Antijammer</h6>
                            <h6 class="card-text">Bloqueo por desconexión de GPS</h6>
                            <h6 class="card-text">Bloqueo remoto</h6>
                            <h6 class="card-text">Inmovilizador</h6>
                            <br>
                            <a href="{{ route('servicioTransporte') }}" class="btn btn-warning">Leer más</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

