<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index(){
    
        $nome=[1,2,3,4];

        return view('welcome',["nome"=>$nome]);
    }

    public function eventos(){
        
        return view('evento/eventos');
    }

    public function criarEventos(){
        
        return view('evento/criarEventos');
    }

    public function entrar(){
        
        return view('evento/entrar');
    }

    public function cadastar(){
        
        return view('evento/cadastar');
    }
}
