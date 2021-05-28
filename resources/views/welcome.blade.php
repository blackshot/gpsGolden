<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>GPS Golden</title>
</head>
<body>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=56989786733" target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
        </a>
    </div>
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fondo-nav">
            <div class="container-fluid">
                <a class="navbar-brand texto-nav" href="/">GPS Golden</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.qmgps.cl/gps_golden/inicioGOLDEN.aspx" target="_blank">Portal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="" class="btn btn-warning">Contactanos</a>
                </div>
            </div>
        </div>        
    </section>


    <section class="servicios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center pt-5 mt-5 titulo-servicios ">Nuestros Servicios</h1>
                </div>
            </div>
            <div class="row pt-5 pb-5 text-center">
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
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
                    <div class="card" style="width: 18rem;">
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
                    <div class="card" style="width: 18rem;">
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
                    <h1 class="text-center pt-5 mt-5 titulo-contactanos ">Contactanos</h1>
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


    <section class="footer pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-3">
                    <h4>Ubicación</h4>
                    <h6>Nos encontramos ubicados en:</h6>
                    <h6>La Chaparrina S/n, San Esteban</h6>
                </div>
                <div class="col-md-4 pt-3">
                    <h4>Horario de Atención</h4>
                    <h6><span class="texto-amarillo">Lunes - Viernes:</span>  09:00 - 19:00</h6>
                    <h6><span class="texto-amarillo">Sabados:</span> 09:00 - 13:00</h6>
                    <h6><span class="texto-amarillo">Domingos y Feriados: </span> <b> CERRADO</b></h6>
                </div>
                <div class="col-md-4 pt-3 pb-3">
                    <h4>Redes Sociales</h4>
                    <a href="https://www.facebook.com/sebastian.ibaceta" target="_blank"><i class="fab fa-facebook"></i>Sebastian Ibaceta</a>
                    <a href="https://www.instagram.com/servicios.integrales.ibaceta/" target="_blank"><i class="fab fa-instagram"></i>Servicios Integrales Ibaceta</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>


