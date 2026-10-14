<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receta;
class RecetaController extends Controller
{
    public function index(){
        return Receta::all();
    }

    public function show(Receta $receta){
        return $receta;
    }

}