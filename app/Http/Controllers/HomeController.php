<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public Function show($nombre, $seccion=null){
        if($seccion != null){
            return 'pagina de clases: '.$nombre.' seccion: '.$seccion;
        }
        else{
            return 'pagina de clases: '.$nombre;
        }
    }
}


