@extends("layouts.app")
@section("content")

<style>

.parrafo2{
  margin: 20px; 
  display: grid; 
  grid-template-columns: 1fr 1fr;
}

.parrafo2 p{
  margin: auto; 
  margin-right: 30px; 
  font-size: 20px;
}

.logos{
  display:grid;
  grid-template-columns:1fr 1fr;
}

.logos a{
  margin:auto;
}
.marcas h2,p{
  margin-left:30px !important;
}

.marcas h2{
  color:darkgreen;
}
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

.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
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

<div class="parrafo2">
<p> El descenso surgió debido a que en la época de 1970 entre los jóvenes era común usar la bici como transporte alternativo, y también el afán por crear y descubrir nuevas experiencias. Y así es como le cambiaron el neumático de la bici de carretera por un balón más grande.<br>
Al año siguiente  se empezaron a organizar las primeras carreras por los pueblos de Marin Country, donde los más atrevidos se disponían a bajar por los campos de Mount Tamalpais.</p>
<img src="{{url('/images/parrafo2.jpg')}}">
</div>

<div class="marcas">
  <h2>Nuestras marcas colaboradoras</h2>
  <p>Aqui encontramos las marcas que proporcionan los equipos en venta: </p>
    <div class="logos">
      <a href="https://www.canyon.com/es-es/" target="_blank"><img src="{{url('/images/logo_canyon.png')}}"></a>
      <a href="https://www.specialized.com/es/es/" target="_blank"><img src="{{url('/images/logo_specialized.png')}}"></a>
    </div>
</div>

<div class="footer">
  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre Nosotros</h6>
            <p class="text-justify">Descenso Leita pretende expandir el deporte conocido como descenso por la zona del valle de Laciana, con esto se pretender incentivar el turismo en la zona.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Interés</h6>
            <ul class="footer-links">
              <li><a href="{{ url('/pistas') }}">Nuestras Pistas</a></li>
              <li><a href="{{ url('/interes') }}">Lugares a visitar</a></li>
              <li><a href="{{ route('alojamientos.index') }}">Alojamientos</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Acceso rápidos</h6>
            <ul class="footer-links">
              <li><a href="/nosotros">Sobre nosotros</a></li>
              <li><a href="{{ route('contactanos.index') }}">Contáctanos</a></li>
              <li><a href="{{ route('bicis.index') }}">Catálogo</a></li>
              <li><a href="/legal">Política de privacidad</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; All Rights Reserved by 
         Jonathan Cotarelo.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100006321421072" target=”_blank”><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/jonicota"><i class="fa fa-twitter" target=”_blank”></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/jon_cota/" target=”_blank”><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/in/jonathan-cotarelo-picote-b71857203/" target=”_blank”><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</div>
</div>


@endsection
