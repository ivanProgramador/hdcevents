@extends('layouts.main')

 @section('title','produto')
  
   @section('content')
   
     @if ($id == 0)

       <p>Por favor selecione um produto </p>
     
       <p>O id recebido e: {{ $id }}</p>

       @elseif ($id == 1)

            <ul>
                <li>Camiseta polo branca</li>
                <li>Preço: 69,99</li>
            </ul>
       @elseif ($id == 2)

            <ul>
                <li>Camiseta polo Azul</li>
                <li>Preço: 69,99</li>
            </ul>
                
                    
         @endif
    
@endsection()
    