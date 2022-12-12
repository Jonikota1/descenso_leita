@extends("layouts.app")
@section("content")

<style>

.nosotros{
    width:60%;
    margin:auto;
}

.nosotros h1,h2{
    color:darkgreen;
}

.nosotros p, h1, h2{
    font-family: Times New Roman;
}

.nosotros h2{
    margin-top:30px;
}

.nosotros p{
    font-size:20px;
}

.localizacion{
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin-bottom: 30px;
}

.direccion{
    margin: auto;
    font-size: 24px;
}

.video_descenso iframe{
    margin: auto;
    margin-bottom: 30px;
    margin-top:30px;
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

<div class="nosotros">
    <h1>Sobre nosotros</h1>
    <p>Descenso Leita tiene como objetivo expandir el turismo en el Valle de Laciana a través de la modalidad de Descenso. Para realizar este objetivo hemos realizado una tienda de Descenso aprovechando las pistas creadas para el esquí o el snow en los meses principalmente de verano.</p>
    <p>Debido al cierre de las minas en España y que las principales actividades económicas de este valle eran mineras la economía de este lugar no está en su auge por lo que debemos encontrar otras maneras de incentivar esta economía, ya sea el turismo, el esquí o en este caso el descenso.</p>


    <h2>Localización</h2>
    <div class="localizacion">
        <div class="direccion">
            <p><b>Calle:</b> Solana Pi-vi</p>
            <p><b>Número:</b> 3</p> 
            <p><b>Código Postal:</b> 24112</p>
            <p><b>Localidad:</b> Villablino, León</p>
        </div>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1339.1094849909373!2d-6.347639220802121!3d42.94417409493904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd372bbeef45b627%3A0x7fe607fe00fbd983!2sC.%20Solana%20Pi-vi%2C%203%2C%2024112%20Villablino%2C%20Le%C3%B3n!5e0!3m2!1ses!2ses!4v1670251818947!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="video_descenso">
        <h2>Descenso, ¿qué es?</h2>
    <p>Para entender que es el descenso aquí les dejo un vídeo:</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VSZ483lffxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
              <li><a href="/">Sobre nosotros</a></li>
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