@extends("layouts.app")
@section("content")


<style>

.cuerpo{
    background-color:rgba(0,255,0,0.2);
}
.centro{
    width: 75%;
    margin: auto;
    background-color:#bdd2b6;
}
.centro h1, h2, h3{
    display: flex;
    justify-content: center;
    color:#663300;
    margin-bottom:30px;
}
.centro img{
    margin:auto;
}

.centro p{
    margin-top: 30px;
    text-align:center;
    color:darkgreen;
    margin-bottom:30px;
}

.urogallo{
    display:grid;
    grid-template-columns:1fr 1fr;
}
.urogallo img{
    padding:10px;
}

.footer{
  background-color:black;
  text-align:center;
  color:white;
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


<div class="cuerpo">
    <div class="centro">
        <div>
            <h1>POZO MARIA</h1>
                <img src="{{url('/images/pozo.jpg')}}">
                    <p>En tributo a las familias de los mineros. En honor a todos los valientes de la monta??a leonesa, a los que dedicaron su vida a la 
                    <br>mina y a los que la perdieron en el tajo. Tambi??n en reconocimiento a los diez que fallecieron en sus profundidades el 17 de 
                    <br>octubre de 1979. Por todos ellos, el pozo Mar??a de Caboalles de Abajo, emblema de la miner??a en la comarca, se convertir?? en el
                    <br> Archivo Hist??rico de las Familias Mineras que supondr?? dotar de una segunda vida a esta infraestructura como testimonio del 
                    <br>desarrollo industrial del valle</p>
        </div>

        <div>
            <h2>CENTRO DEL UROGALLO</h2>
                <div class="urogallo">
                    <img src="{{url('/images/urogallo.jpg')}}">
                    <img src="{{url('/images/centro.jpg')}}">
                </div>
                    <p>Es un centro de interpretaci??n del Urogallo de la naturaleza en el cual se proyectan 
                        audiovisuales se explica <br>contenidos arquitect??nicos de la zona, se explica el habitat
                         del urogallo ,oso, y otras especies de la zona .<br> Es una casa t??pica de la zona y se
                         caracteriza por que tiene forma de herradura.</p>

                    <p>Se trata de un edificio de nueva planta, dise??ado con criterios tradicionales, 
                        logrando una correcta <br>reinterpretaci??n de la casa t??pica lacianega mediante la tipolog??a constructiva y el tratamiento de materiales <br>externos, 
                        generando una distribuci??n interior con espacios interesantes adecuados para el nuevo uso.</p>
        </div>

        <div>
            <h3>LAGUNA DEL PUERTO</h3>
                <img src="{{url('/images/laguna.jpg')}}">
                    <p>La Laguna de Arb??s, o del Puerto, tambi??n conocida como Laguna de Cueto Arb??s, es un lago de origen glaciar que se encuentra 
                        <br>en el concejo asturiano de Cangas del Narcea, aunque muy cerca de la frontera que limita con el de Villablino, ya en la Provincia de Le??n</p>
                    <p>Adem??s del precioso paisaje a tus alrededores, tambi??n podr??s realizar una ruta a trav??s de la monta??a desde El Puerto Leitariegos 
                        <br>hasta Cuetu de Arbas pasando por este magn??fico lugar.
                        La ruta consta de unos 2km de longitud y por monta??a, es un lugar magn??fico<br> para sacar fotos del paisaje</p>
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

</div>


@endsection