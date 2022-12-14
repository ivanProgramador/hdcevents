<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--css do bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--fontes do google-->
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--css da aplicação-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <link rel="stylesheet" href="/css/styles.css">

        <!--icones-->

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="/js/script.js"></script>
        
    </head>
    <body class="antialiased">

      <header>
      
         <nav class="navbar navbar-expand navbar-lg navbar-light">
         
           <div class="collapse navbar-collapse" id="navbar">

             <a href="/" class="navbar-brand">


                <img src="/img/hdcevents_logo.svg" alt="HDC Events">
             
                
             </a>

             <ul class="navbar-nav">
                
                 <li class="naviten">
                   <a href="/" class="nav-link">Eventos</a>
                 </li>

                 <li class="naviten">
                   <a href="/events/create" class="nav-link">Criar eventos</a>
                 </li>
                 
                 @auth

                 <li class="naviten">
                   <a href="/dashboard" class="nav-link">Meus eventos</a>
                 </li>

                 <li class="naviten">
                   <form action="/logout" method="POST">
                      @csrf
                      <a 
                         href="/logout"
                         class="nav-link"
                         onclick="event.preventDefault(); this.closest('form').submit();"        
                        >Sair</a>
                   </form>
                 </li>

                   


                 @endauth

                 @guest
                
                 <li class="naviten">
                   <a href="/login" class="nav-link">Entrar</a>
                 </li>

                 <li class="naviten">
                    <a href="/register" class="nav-link">Cadastrar</a>
                 </li>

                 @endguest





               

                 
             
             
             </ul>
           
           
           </div>
         
         </nav>
      
      
      </header>


     <main>
     
         <div class="container-fluid">
            
            <div class="row">

            @if(session('msg'))

              <p class="msg">{{ session('msg') }} </p>
              
            @endif
            @yield('content')

            
            
            </div>
         
         </div>
     
     
     </main>

    
       

       <footer>
           <p>HDC Events &copy; 2020</p>
       </footer>

       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
