<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="/css/styles.css">

        <script src="/js/script.js"></script>
        
    </head>
    <body class="antialiased">

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


       
    </body>
</html>
