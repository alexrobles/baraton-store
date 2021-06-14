<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function test(Request $request) {
        return "Accion de test de Product-Controlller";
    }
}
