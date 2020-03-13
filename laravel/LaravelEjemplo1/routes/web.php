<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //echo "Hola mundo";
    return view('welcome');
});

Route::get('/mostrarFecha',function(){// a los retorno de views se les puede enviar parametros en un array
    $nombre = "jhon";
    $apellido = "rodriguez";
    return view('fecha',array(
        'nombre' => $nombre,
        'apellido' => $apellido
    ));
});

Route::get('/pelicula/{titulo}',function($titulo){ //{}obligatorio  {?}opcional   $titulo ='no se ha enviado parametro'
    return view('pelicula',array(
        'titulo' => $titulo
    ));
})->where(array(  // condicional para un parametro
    'titulo' => '[a-zA-Z0-9 ]+',
    'titulo'
));

Route::get('/listado-peliculas',function(){
    $titulo = "este es un listado de peliculas";
    return view("peliculas.listado",array(
        'titulo' => $titulo 
    ));
});
Route::get('/peliculas-marvel',function(){     
    return view("peliculas.marvel")
        ->with('manolo'/*este es el nombre con el que queda la variable*/,"manolo") //esta es otra forma de enviar parametros ## es mas comoda ocupa menos espacio :)
        ->with('parametro','')
        ->with('titulo','titulo');
});

Route::get('/includeex',function(){
    return view("includeex");
});
Route::get('/slave',function(){
    return view("slave");
});

Route::get('/list/{parametro}','peliculaController@index');
Route::get('/detalle','peliculaController@detallePelicula');


//blade es una extencion para el manejo de plantillas y demas mkdas
/*

controlador de tipo resource

*/

//{{}} esta es la interpolacion de variables o lo que sea asi como {!!  !!} tambien funciona

