@extends("layouts.app")
@section("content")


<div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Alojamientos</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Alojamientos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($alojamientos as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{url('/images/'.$pro->imagen)}}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->imagen }}"
                                >
                                <div class="card-body">
                                    <a href="{{route('alojamientos.show', $pro) }}"  class="d-block display-10 mb-4 h-100 no-underline" style="color:darkgreen;"><h6 class="card-title">{{ $pro->nombre }}</h6></a>
                                    <p>{{ $pro->precio }}€</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


<div class="flex justify-center flex-wrap bg-secondary p-4 mt-5 text-white ">
<div class="text-center">
@auth
  @if(auth()->user()->roles()->find(1))<!--Solo puede acceder siendo administrador-->
  <h1 class="mb-5">{{ __("Añade un objeto") }}</h1>
<a href="{{route('bicis.create')}}" class="bg-transparent hover:bg-red-500 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
{{ __("Añadir objeto")}}<!--Me lleva a bicis/create-->
@endif
  @endauth
</a>
</div>
</div>

@endsection