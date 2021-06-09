<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); quita el middelware del login
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing');
    }

    public function servicioTransporte(){
        $datosTrasnporteCarga = array(
            array(
                'titulo' =>'Robo de carga completa',
                'solucion' => 'Detector de Jammer',
                'descripcion' => 'Logramos detectar cuando están interfiriendo la señal GPS del camión. De ésta manera, poder detener el camión de forma segura para no poner en peligro al conductor.Solución: Bloqueo remoto del motor.Mediante nuestra plataforma, el usuario podrá detener el camión ingresando una contraseña. Solución: Bloqueo por desconexión del GPS. Es típico que cuando se roban un camión, los delincuentes intentan sacar el GPS para que no los encuentren. Nuestro sistema permite que el camión se detenga si nos desconectan el GPS.'
            ),
            array(
                'titulo' =>'Apertura de puertas en lugares indebidos',
                'solucion' => 'Sensor de Puertas traseras',
                'descripcion' => 'Sabemos dónde abren y cierran las puertas traseras. Con esto podemos detectar posibles robos en la ruta.'
            ),
            array(
                'titulo' =>'Gestión de mantenciones a mano',
                'solucion' => 'Módulo de mantenciones preventivas',
                'descripcion' => 'Contabilizamos los kilómetros recorridos por cada caminón y avisamos cuando se aproxima una mantención para poder gestionarla de manera eficiente.'
            ),
            array(
                'titulo' =>'Mandante exige los datos del GPS',
                'solucion' => 'Web services',
                'descripcion' => 'Al ser desarrolladores de la plataforma, realizamos sistemas de reenvios de la información para que nuestros clientes puedan cumplir con los requerimientos del generador de carga.'
            ),
            array(
                'titulo' =>'Robo y control de combustible',
                'solucion' => 'Lector de computador del camión',
                'descripcion' => 'Podemos saber el consumo real que tuvo el camión por intervalo de tiempo o rutas. De esta manera el cuadre con las cargas nos entrega las fugas y por otro lado saber qué conductor es más eficiente.'
            ),        
        );

        return view('serviciosTransCarga', compact('datosTrasnporteCarga'));
    }

    public function servicioMaquinariaConstrusccion(){
        $datosMaquinariaConstruccion = array(
            array(
                'titulo' => 'Robo de maquinaria',
                'solucion' => '1) Bloqueo remoto del motor. 
                               2) Bloqueo por desconexión de GPS.',
                'descripcion' => '1) Mediante nuestra plataforma el usuario podrá detener el camión ingresando una contraseña. 
                                  2) Es típico que cuando se roban un camión los delicuentes intentan sacar el GPS para que no los encuentren. Nuestro sistema permite que el camión  se detenga si nos desconectan el GPS.'
            ),
            array(
                'titulo' => 'Control de horas trabajadas',
                'solucion' => 'Sensor de ignición',
                'descripcion' => 'Sabemos el tiempo que está trabajando la máquina y el lugar en donde se ubica. Con esta información ayudamos queu la facturación sea en tiempo real y que no dependa de personal para ir a cada máquina a ver las horas trabajadas.'
            ),
            
            array(
                'titulo' => 'Gestión de mantenciones a mano',
                'solucion' => 'Módulo de mantenciones preventivas.',
                'descripcion' => ' Contabilizamos las horas de funcionamiento de casa máquina y avisamos cuando se aproxima una mantencion para poder gestionarla de manera más eficiente.'
            ),
            array(
                'titulo' => 'Mandante de los datos del GPS',
                'solucion' => 'Web Services',
                'descripcion' => 'Al ser desarrolladores de la plataforma, realizamos sistemas de reenvios de la información para que nuestros clientes puedan cumplir con los requerimientos del generador de carga.'
            ),
            array(
                'titulo' =>'Robo y control de combustible',
                'solucion' => 'Lector de computador de la maquinaria',
                'descripcion' => 'Podemos saber el consumo real que tuvo la máquina por intervalos de tiempo. De esta manera el cuadre con las cargas nos entrega las fugas y por otro lado saber qué operador es más eficiente. Además sabemos los codigos de falla.'
            ),

        );
          
        return view('serviciosMaquiCons', compact('datosMaquinariaConstruccion'));

    }

    public function servicioParticulares(){
        return view('serviciosParticulares');
    }
}
