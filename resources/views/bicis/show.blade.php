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
   <img class="rounded float-right" src="{{url('/images/'.$bicis->imagen)}}">
</div>
<div class="col-sm-8">
   <h2 class="text-info">{{$bicis->nombre}}</h2>
   <p><b>Descripción: </b> {{$bicis->descripcion}} </p>
   <p><b>Precio: </b> {{$bicis->precio}} €</p>

   <div class="btn-group btn-group-justified">
   @auth
   @if(auth()->user()->roles()->find(1))
<a href="{{route('bicis.edit',['bici'=>$bicis->id])}}" class="enlaces" ><button type="button" class="btn btn-success">Editar</button></a>
    
<a href="#" class="text-red-400" style="margin-right:10px;" onclick="event.preventDefault(); 
                 document.getElementById('delete-bicis-{{$bicis->id}}-form').submit();"><button type="button" class="btn btn-danger">{{ __("Eliminar")}}</button></a>
 <form id="delete-bicis-{{$bicis->id}}-form" action="{{route('bicis.destroy',['bici'=>$bicis->id])}}" method="POST" class="hidden">
                @METHOD('DELETE')
                @csrf
   </form>
   @endif
   @endauth

   <a href="{{route('bicis.index')}}" class="enlaces"> <button type="button" class="btn btn-dark text-white">Catálogo</button></a>
   </div>
</div>
</div>

@endsection