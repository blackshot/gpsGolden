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
            <div class="row">
                <div class="col">
                    <h1 class="text-center pt-5 mt-5 titulo-servicios ">Nuestros Servicios</h1>
                </div>
            </div>
            <div class="row pt-5 pb-5 text-center">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/camion.png') }}" class="card-img-top" alt="...">
                        <div class="card-title pt-3">
                            <h5>Servicio 1</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-warning">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/camion.png') }}" class="card-img-top" alt="...">
                        <div class="card-title pt-3">
                            <h5>Servicio 2</h5>
                            
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-warning">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/camion.png') }}" class="card-img-top" alt="...">
                        <div class="card-title pt-3">
                            <h5>Servicio 3</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-warning">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="formulario pb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center pt-5 mt-5 titulo-contactanos ">Contáctanos</h1>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Patricio Alverto Vega Urtubia">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="tucorreo@gmail.com">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Teléfono</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="912345678">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary text-center">Enviar</button>
                </div>
            </form>
        </div>
    </section>
@endsection

