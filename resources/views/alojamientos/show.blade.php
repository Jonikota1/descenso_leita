@extends("layouts.app")
@section("content")

@auth
   @if(auth()->user()->roles()->find(1))
<div class="container-fluid bg-grey w-75 p-3">
<div class="row">
<div class="col-sm-4 clearfix">
   <img class="rounded float-right" src="{{url('/images/'.$alojamientos->imagen)}}">
</div>
<div class="col-sm-8">
   <h2 class="text-info">{{$alojamientos->nombre}}</h2>
   <p><b>Descripción: </b> {{$alojamientos->descripcion}} </p>
   <p><b>Precio: </b> {{$alojamientos->precio}}</p>

   <div class="btn-group btn-group-justified">

<a href="{{route('alojamientos.edit',['alojamiento'=>$alojamientos->id])}}"><button type="button" class="btn btn-success">Editar</button></a>
    
<a href="#" class="text-red-400" onclick="event.preventDefault(); 
                 document.getElementById('delete-alojamientos-{{$alojamientos->id}}-form').submit();"><button type="button" class="btn btn-danger">{{ __("Eliminar")}}</button></a>
 <form id="delete-alojamientos-{{$alojamientos->id}}-form" action="{{route('alojamientos.destroy',['alojamientos'=>$alojamientos->id])}}" method="POST" class="hidden">
                @METHOD('DELETE')
                @csrf
   </form>

   <a href="{{route('alojamientos.index')}}"> <button type="button" class="btn btn-dark text-white">Alojamiento</button></a>
   </div>
</div>
</div>
@endif
   @endauth
@endsection