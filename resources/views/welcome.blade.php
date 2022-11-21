@extends("layouts.app")
@section("content")

<style>
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}

.footer{
  background-color:black;
  text-align:center;
  color:white;
}
</style>

<div class="min-h-screen flex  justify-center" style="display:flex; flex-direction:column;">
    
<div id="slider" style="height: 600px;">
<figure>
<img src="{{url('/images/slider1.jpg')}}">
<img src="{{url('/images/slider2.jpg')}}">
<img src="{{url('/images/slider3.jpg')}}">
<img src="{{url('/images/slider4.jpg')}}">
<img src="{{url('/images/slider5.jpg')}}">
</figure>
</div>

<div style="margin: 20px; display: grid; grid-template-columns: 1fr 1fr;">
<img src="{{url('/images/portada.jpg')}}">
<p style="margin: auto; margin-left: 30px; font-size: 20px;">El descenso​ es una de las disciplinas más extremas en el deporte del ciclismo,​ consiste en descender por circuitos con saltos, jardines de rocas, árboles y otros arbustos.Una de las abundantes pistas de descenso es BTT Puro Pirineo​ el ciclista tiene que escoger entre diferentes posibilidades de evitar los obstáculos y poder llegar a la meta lo más rápido posible, en general tiene dos circuitos, la línea corta pero más arriesgada, o la más larga pero más fácil, lo que escoja depende de su habilidad y confianza, ya que si escoge la más corta y se cae perderá mucho tiempo.</p>
</div>

<div class="footer">
  <footer>
    <p style="margin:10px;">Copyright by jonikota</p>
  </footer>
</div>
</div>


@endsection
