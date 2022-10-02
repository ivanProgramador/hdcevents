@extends('layouts.main')

 @section('title','Criar Evento')
  
   @section('content')

   

   <div class="col-md-6 offset-md-3" id="event-create-container">
   
      <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
         @csrf


         <div class="form-group">
           
           <label for="image">Imagem do evento:</label>
           <input type="file" id="image" name="image" class="form-control-file">
   
      
          </div>





           <div class="form-group">
           
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="titulo do evento">
        
           
           </div>

           <div class="form-group">
           
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
   
      
          </div>

          <div class="form-group">
                
                <label for="title">O evento é privado:</label>

                <select name="private" id="private" class="form-control">
                   <option value="0">Não</option>
                   <option value="1">Sim</option>
                </select>
   
      
          </div>

          <div class="form-group">
           
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Oque vai acontecer no evento ?"></textarea>
      
          </div>

          <input type="submit" class="btn btn-primary" value="Criar Evento">

      
      
        </form>    
   
   
   
   </div>
   
   
@endsection()