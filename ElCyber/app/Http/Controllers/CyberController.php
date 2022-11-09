<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CyberRequests;
class CyberController extends Controller
{
    function form(){
        return view('/form');
    }
    function cons(){
        return view('/cons');
    }
    public function saveR(CyberRequests $req){
        return redirect('/')->with('confirmForm', 'Datos enviados correctamente');
    }
}
