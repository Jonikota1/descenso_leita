@extends("layouts.app")
@section("content")

<style>

.pistas{
  background-color:rgba(0,255,0,0.2);
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
<div class="pistas">
<div style="width:90%; margin:auto;">
    <h1 style="margin-bottom:25px; color:brown;">Nuestras pistas en Leitariegos </h1>
    <div style="display: grid; grid-template-columns: 1fr 1fr;">
        <img src="{{url('/images/pistas.png')}}">
            <p style="margin: auto; margin-left: 30px; font-size: 20px;">En esta imagen observamos un total de 14 pistas. Estas pistas originalmente estaban destinadas al esquí o snowboard,
                pero debido a que en verano, otoño y finales de primavera no son utilizadas se han convertido en unas excelentes pistas
                para el descenso en bicicleta. Como podemos observar hay diferentes colores de pistas yendo de más fácil o más dificil(el orden
                sería verde, azul y por último rojo, la naranja es un parque de snow que podría servir para divertirse con la bicicleta haciendo trucos).
                </br>
                <br>
                <strong>La longitud de las pistas:</strong><br>
                <strong>1. La Escuela:</strong> 375 metros<br>
                <strong>2. La Cueva:</strong> 425 metros<br>
                <strong>3. Chagunachos:</strong>	830 metros<br>
                <strong>4. Autovía:</strong>	1500 metros<br>
                <strong>5. Conexión:</strong> 450 metros<br>
                <strong>6. El Tubo:</strong>	600 metros<br>
                <strong>7. Serbales:</strong> 750 metros<br>
                <strong>8. Abedules:</strong> 1300 metros<br>
                <strong>9. El Neveiru:</strong> 385 metros<br>
                <strong>10. La Pechxada:</strong> 385 metros<br>
                <strong>11. Snowpark:</strong> 250 metros<br>
                <strong>12. Stadium:</strong> 600 metros<br>
                <strong>13. El Oso:</strong>	150 metros<br>
                <strong>14. El Urogallo:</strong> 250 metros
            </p>
    </div>
    <div class="imagen_pistas">
    <h2 style="margin-top:25px; margin-bottom:25px; color:brown;">Distancia en Km para llegar a las pistas</h2>
        <p style="margin-top:25px; margin-bottom:25px;">En el siguiente cuadro vemos la distancia que hay desde las principales ciudades más cercanas a las pistas </p>
        <img src="{{url('/images/distancia.png')}}">
    </div>
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
              <li><a class="twitter" href="https://twitter.com/jonicota" target=”_blank”><i class="fa fa-twitter"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/jon_cota/" target=”_blank”><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/in/jonathan-cotarelo-picote-b71857203/" target=”_blank”><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</div>


@endsection