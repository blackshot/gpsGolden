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
                    <h2 class="text-center texto-amarillo">Transporte de Carga</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="accordion">
                        @foreach ( $datosTrasnporteCarga as $key => $datos)    
                            <div class="card mb-2">
                                <div class="card-header" id="heading{{$key}}">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                            {{$datos['titulo']}}
                                        </button>
                                    </h3>
                                    <p>Solucion: {{$datos['solucion']}}</p>
                                </div>

                                <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                                    <div class="card-body">
                                        {{$datos['descripcion']}}
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Plataforma GPS Golden</h4>
                            <h5 class="card-text text-center">0.5 UF mensual por cada camión</h5>
                            <h6>Cobertura roaming desarrollo propio. Desarrollo contunuo para mejorar.</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Equipamiento Base</h4>
                            <h5 class="card-text text-center">1 UF </h5>
                            <h6>Instalación GPS dentro de la V región.</h6>
                            <hr>
                            <h5 class="card-text text-center">2 UF </h5>
                            <h6>Instalación GPS fuera de la V región.</h6>
                            <small>Tiempo estimado de instalación por camión: <b>40 minutos</b> </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Equipamiento Recomendado</h4>
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

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Equipamiento adicional</h4>
                            <h5 class="card-text text-center">1.5 UF </h5>
                            <h6>Identificador de conductor.</h6>
                            <p>Permite identificar a cada conductor mediante una tarjeta personalizada</p>
                            <hr>
                            <h5 class="card-text text-center">1.5 UF </h5>
                            <h6>Sensor de puertas traseras.</h6>
                            <p>Podremos tener el registro de las aperturas de puertas en lugares indebidos</p>
                            <hr>
                            <h5 class="card-text text-center">1.5 UF </h5>
                            <h6>Sensor de temperatura.</h6>
                            <p>Si transporta carga refrigerada, los sensores le ayudarán a udted y a su cliente a saber si se mantuvo la cadena de frío</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection