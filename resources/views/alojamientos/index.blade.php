@extends("layouts.app")
@section("content")

<style>
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
                        <p style="font-family:Times New Roman; font-size:17px;">Te presentamos los lugares de alojamiento cercanos a las pistas con los cuales nosotros tenemos relaci??n.
                          <br>Actualmente disponemos de tres, pero en un futuro esperamos poder expandirlo. Te ofrecemos tres tipos de alojamientos, uno que es habitual como un hotal, otro que es m??s barato como un aparthotel y otro por si quieres una inclusi??n m??s activa como son apartamentos</p>
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
                                    <p>Desde: {{ $pro->precio }}???</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

  @auth
  @if(auth()->user()->roles()->find(1))<!--Solo puede acceder siendo administrador-->
<div class="flex justify-center flex-wrap p-4 mt-5 text-white" style="background-color: #bdd2b6;">
<div class="text-center">
  <h1 class="mb-5">{{ __("A??ade un objeto") }}</h1>
<a href="{{route('alojamientos.create')}}" class="bg-transparent hover:bg-red-500 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
{{ __("A??adir objeto")}}<!--Me lleva a bicis/create-->
@endif
  @endauth
</a>
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
            <h6>Inter??s</h6>
            <ul class="footer-links">
              <li><a href="{{ url('/pistas') }}">Nuestras Pistas</a></li>
              <li><a href="{{ url('/interes') }}">Lugares a visitar</a></li>
              <li><a href="{{ route('alojamientos.index') }}">Alojamientos</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Acceso r??pidos</h6>
            <ul class="footer-links">
              <li><a href="/nosotros">Sobre nosotros</a></li>
              <li><a href="{{ route('contactanos.index') }}">Cont??ctanos</a></li>
              <li><a href="{{ route('bicis.index') }}">Cat??logo</a></li>
              <li><a href="/legal">Pol??tica de privacidad</a></li>
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
              <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100006321421072" target=???_blank???><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/jonicota" target=???_blank???><i class="fa fa-twitter"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/jon_cota/" target=???_blank???><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/in/jonathan-cotarelo-picote-b71857203/" target=???_blank???><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</div>

@endsection