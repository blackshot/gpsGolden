@extends('layouts.appServicios')

@section('titulo', 'GPS Golden')

@section('cuerpo')
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=56989786733" target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
        </a>
    </div>

    <section class="datos-seccion-servicios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center texto-amarillo">Maquinaria - Construcción</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div id="accordion">
                        @foreach ( $datosMaquinariaConstruccion as $key => $datos)    
                            <div class="card card-custom-services mb-2">
                                <div class="card-header" id="heading{{$key}}">
                                    <h3 class="mb-0 text-center">
                                        <button class="btn btn-link titulo-datos-servicios" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                            {{$datos['titulo']}}
                                            <br>
                                            <h6 class="solucion">Solución:</h6>
                                            <h6 class="solucion-data">{{$datos['solucion']}}</h6>
                                        </button>
                                    </h3>
                                    
                                </div>

                                <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{{$datos['descripcion']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                    <div class="card card-custom-prices">
                        <div class="card-body">
                            <h4 class="card-title text-center title-card-prices">Plataforma GPS Golden</h4>
                            <h5 class="card-text text-center">0.5 UF</h5>
                            <h5 class="card-text text-center">Mensual por camión</h5>
                            <h6 class="h6_plataforma text-center">Cobertura roaming desarrollo propio. Desarrollo contunuo para mejorar.</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                    <div class="card card-custom-prices">
                        <div class="card-body">
                            <h4 class="card-title text-center title-card-prices">Equipamiento Base</h4>
                            <h5 class="card-text text-center">1 UF </h5>
                            <h6>Instalación GPS dentro de la V región.</h6>
                            <hr>
                            <h5 class="card-text text-center">2 UF </h5>
                            <h6>Instalación GPS fuera de la V región.</h6>
                            <small class="text-primary">Tiempo estimado de instalación por camión: <b>40 minutos</b> </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                    <div class="card card-custom-prices">
                        <div class="card-body">
                            <h4 class="card-title text-center title-card-prices">Equipamiento Recomendado</h4>
                            <h5 class="card-text text-center">1.5 UF</h5>
                            <h6>Bloqueo de motor.</h6>
                            <h6>Instalación corta corriente.</h6>
                            <hr>
                            <h5 class="card-text text-center">8 UF</h5>
                            <h6>Detector de Jammer.</h6>
                            <h6>Equipamiento de protección ante inhibidores GPS.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection