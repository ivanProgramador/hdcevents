<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
     public function index(){

        $nome = "ivan";

        $arr = [1,2,3,4,5,6];
    
        return view('welcome',[
            'nome' => $nome,
            'arr'  => $arr
        ]);


     }


     public function create(){

        return view('events.create');
     }



     public function contatos(){

        return view('events.contatos');
     }

     public function produtos(){

        return view('events.produtos');
     }
}
