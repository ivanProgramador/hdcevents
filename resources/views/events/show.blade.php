@extends('layouts.main')

 @section('title','Criar Evento')
  
   @section('content')


   <div class="col-md-10 offset-md-1">
      <div class="row">
         <div class="col-md-6" id="image-container">

             <img src="/img/events/{{$event->image}}" alt="" class="img-fluid" alt="{{$event->title}}">

         </div>
         <div class="col-md-6" id="info-container">

           <h1>{{$event->title}}</h1>
           <p class="event-city"> <ion-icon name="location-outline"></ion-icon>{{$event->city}} </p>
           <p class="events-participants"> <ion-icon name="people-outline"></ion-icon> X Participantes</p>
           <p class="event-onwer"><ion-icon name="star-outline" ></ion-icon>Dono do evento</p>

           
           <a href="#" class="btn btn-primary" id="event-submit"> Confirmar presença</a>

         
         </div>

         <div class="col-md-12 description-container">
           
            <h3>Sobre o evento</h3>

            <p class="event-description">{{$event->description}} </p>
         
            
         </div>
      
      </div>
   
   
   
   </div>


@endsection()