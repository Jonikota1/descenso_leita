@extends("layouts.app")
@section("content")


<div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($bicis as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{url('/images/'.$pro->imagen)}}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->imagen }}"
                                >
                                <div class="card-body">
                                    <a href="{{route('bicis.show', $pro) }}"  class="d-block display-10 mb-4 h-100 no-underline" style="color:darkgreen;"><h6 class="card-title">{{ $pro->nombre }}</h6></a>
                                    <p>{{ $pro->precio }}€</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->precio }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->imagen }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->descipcion }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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