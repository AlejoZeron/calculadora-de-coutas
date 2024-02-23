<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    function calcularcuotaMensual($montoPrestamo, $tasaInteresMensual, $plazoMeses) {
        $factor = pow(1 + $tasaInteresMensual, $plazoMeses);
        $cuotaMensual = ($montoPrestamo * $tasaInteresMensual * $factor) / ($factor - 1);

    echo "La cuota mensual del préstamo es: $" . number_format($cuotaMensual, 2);
      }


}
