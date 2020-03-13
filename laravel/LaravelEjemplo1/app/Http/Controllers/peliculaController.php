<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculaController extends Controller{
   public function index($parametro = 1){
        $titulo = "este es el titulo asignado desde el controlador";
        return view('peliculas.listado',[
            'titulo'=>$titulo,
            'parametro' => $parametro]
        );   
    }
    public function detallePelicula(){
        echo 'jajajjajaaj';        
    }
}