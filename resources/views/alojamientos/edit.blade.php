@extends("layouts.app")
@section("content")
@if(auth()->user()->roles()->find(1))
<div class="flex justify-center flex-wrap p-4 mt-5">
    @include("alojamientos.form")
</div>
@endif
@endsection