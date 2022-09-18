
@extends('layouts.main')

 @section('title','HDC Events')
  
   @section('content')

        <h1>Algum titulo</h1>
        <img src="/img/banner.jpg" alt="">

        @if (100>20)

          <p>A condição e verdadeira</p>
            
        @endif
        <br>
        O valor da varivel nome e : {{ $nome }} 
        <br>

        @for($i = 0 ; $i < count($arr); $i++ )

          <p>{{ $arr[$i] }} - {{ $i }}</p>

          @if ($i == 2)
          
          <p> i  é igual a 2 </p>
              
          @endif
         
     @endfor

    @endsection()


       
 
