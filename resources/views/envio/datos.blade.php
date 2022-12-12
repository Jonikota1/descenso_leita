@extends('layouts.app')
@section('content')

@if(auth()->user()->roles()->find(1))
<div class="container">

<h1 class="text-muted text-center text-lg-left mt-4 mb-0">{{ __("Datos de envío") }}</h1>
<br><br>

<table class="table table-bordered bg-black text-white">
    <tr>
      <th>Nombre</th>
      <th>Correo</th>
      <th>DNI</th>
      <th>Direccion</th>
      <th>Codigo Postal </th>
      <th>Población </th>
      <th>Objeto</th>
      <th>Cantidad</th>
    </tr>

    @foreach($envios as $envi)
    <tr class="bg-secondary">
      <td>{{$envi->nombre}}</td>
      <td>{{$envi->correo}}</td>
      <td>{{$envi->dni}}</td>
      <td>{{$envi->direccion}}</td>
      <td>{{$envi->postal}}</td>
      <td>{{$envi->poblacion}}</td>
      <td>{{$envi->objeto}}</td>
      <td>{{$envi->cantidad}}</td>
      <td>{{$envi->user_id}}</td>

    @endforeach
</table>
</div>

@else 
    @include("error.index")
@endif

@endsection