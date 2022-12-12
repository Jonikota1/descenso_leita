@extends("layouts.app")
@section("content")

<style>
   .enlaces{
   margin-right:10px;
   }
</style>

<div class="container-fluid bg-grey w-75 p-3">
<div class="row">
<div class="col-sm-4 clearfix">
   <img class="rounded float-right" src="{{url('/images/'.$alojamientos->imagen)}}">
</div>
<div class="col-sm-8">
   <h2 class="text-info">{{$alojamientos->nombre}}</h2>
   <p><b>Descripción: </b> {{$alojamientos->descripcion}} </p>
   <p><b>Precio: </b>Desde {{$alojamientos->precio}} €</p>

   <div class="btn-group btn-group-justified">
   @auth
   @if(auth()->user()->roles()->find(1))
<a href="{{route('alojamientos.edit',['alojamiento'=>$alojamientos->id])}}" class="enlaces"><button type="button" class="btn btn-success">Editar</button></a>
    
<a href="#" class="text-red-400" style="margin-right:10px;" onclick="event.preventDefault(); 
                 document.getElementById('delete-alojamientos-{{$alojamientos->id}}-form').submit();"><button type="button" class="btn btn-danger">{{ __("Eliminar")}}</button></a>
 <form id="delete-alojamientos-{{$alojamientos->id}}-form" action="{{route('alojamientos.destroy',['alojamiento'=>$alojamientos->id])}}" method="POST" class="hidden">
                @METHOD('DELETE')
                @csrf
   </form>

   @endif
   @endauth

   <a href="{{$alojamientos->enlace}}" target=”_blank” class="enlaces"><button type="button" class="btn btn-info text-white">Visitanos</button></a>
   <a href="{{route('alojamientos.index')}}" class="enlaces"> <button type="button" class="btn btn-dark text-white">Alojamiento</button></a>
   </div>
</div>
</div>
@endsection