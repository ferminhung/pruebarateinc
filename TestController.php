<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestController extends Controller
{
    function admintest(){
        $date = Carbon::now();
        $date = $date->format('d-m-Y');
        
        return view('admintest');
    }

    function gestionencuestas(){
        
        return view('gestionEncuestas');
    }



    function guardarencuesta(){
        $data = request()->all();
        $result=DB::insert('INSERT INTO Encuestas (titulo, tipoencuesta, instrucciones, created_at) values (?, ?, ?, ?)', [$data['titulo'], 'Normal', $data['instrucciones'], Carbon::now()]);
        $encuesta=DB::table('Encuestas')->get()->last();
        
        return view('fichapreguntas/{$encuesta->id}');
            
    }

}
