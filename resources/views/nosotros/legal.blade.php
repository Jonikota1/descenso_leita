@extends("layouts.app")
@section("content")

<style>

.legal{
    width:60%;
    margin:auto;
}

.legal h1,h2{
    color:darkgreen;
}

.legal ul{
    list-style: circle;
}

.legal p, li, h1, h2{
    font-family: Times New Roman;
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

<div class="legal">

<div class="privacidad">

<h1> Pol??tica de Privacidad </h1>

<p>Descenso Leita te informa sobre su Pol??tica de Privacidad respecto del tratamiento y protecci??n de los datos de car??cter personal de los usuarios y clientes que puedan ser recabados por la navegaci??n o contrataci??n de servicios a trav??s del sitio Web descenso_leita.<br>

En este sentido, el Titular garantiza el cumplimiento de la normativa vigente en materia de protecci??n de datos personales, reflejada en la Ley Org??nica 3/2018, de 5 de diciembre, de Protecci??n de Datos Personales y de Garant??a de Derechos Digitales (LOPD GDD). Cumple tambi??n con el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protecci??n de las personas f??sicas (RGPD). <br>

El uso de sitio Web implica la aceptaci??n de esta Pol??tica de Privacidad as?? como las condiciones incluidas en el Aviso Legal.</p>

</div>

<div class="identidad">

    <h2>Identidad del responsable</h2>
    <ul>
        <li>Titular: JONATHAN COTARELO</li>
        <li>NIF/CIF: 09814833C</li>
        <li>Domicilio: CALLE MAYOR, 5, 2 DERECHA</li>
        <li>Correo electr??nico: jonipiko@gmail.com</li>
        <li>Sitio Web: Descenso Leita</li>
    </ul>

</div>

<div class="">
    <h2>Principios aplicados en el tratamiento de datos</h2>

    <p>En el tratamiento de tus datos personales, el Titular aplicar?? los siguientes principios que se ajustan a las exigencias del nuevo reglamento europeo de protecci??n de datos:</p>
    <ul>
        <li><strong>Principio de licitud, lealtad y transparencia: </strong>El Titular siempre requerir?? el consentimiento para el tratamiento de tus datos personales que puede ser para uno o varios fines espec??ficos sobre los que te informar?? previamente con absoluta transparencia.</li>
        <li><strong>Principio de minimizaci??n de datos: </strong>El Titular te solicitar?? solo los datos estrictamente necesarios para el fin o los fines que los solicita.</li>
        <li><strong>Principio de limitaci??n del plazo de conservaci??n: </strong>Los datos se mantendr??n durante el tiempo estrictamente necesario para el fin o los fines del tratamiento.<br>
        El Titular te informar?? del plazo de conservaci??n correspondiente seg??n la finalidad. En el caso de suscripciones, el Titular revisar?? peri??dicamente las listas y eliminar?? aquellos registros inactivos durante un tiempo considerable.</li>
        <li><strong>Principio de integridad y confidencialidad: </strong>Tus datos ser??n tratados de tal manera que su seguridad, confidencialidad e integridad est?? garantizada. Debes saber que el Titular toma las precauciones necesarias para evitar el acceso no autorizado o uso indebido de los datos de sus usuarios por parte de terceros.</li>
    </ul>
</div>

<div class="personales">
    <h2>Obtenci??n de datos personales</h2>
    <p>Para navegar por SITIO-WEB no es necesario que facilites ning??n dato personal. Los casos en los que s?? proporcionas tus datos personales son los siguientes:</p>
    <ul>
        <li>Al contactar a trav??s de los formularios de contacto o enviar un correo electr??nico.</li>

    </ul>
</div>

<div class="derechos">
    <h2>Tus derechos</h2>
    <p>El Titular te informa que sobre tus datos personales tienes derecho a:</p>
    <ul>
        <li>Solicitar el acceso a los datos almacenados.</li>
        <li>Solicitar una rectificaci??n o la cancelaci??n.</li>
        <li>Solicitar la limitaci??n de su tratamiento.</li>
        <li>Oponerte al tratamiento.</li>
        <li>Solicitar la portabilidad de tus datos.</li>
    </ul>

    <p>El ejercicio de estos derechos es personal y por tanto debe ser ejercido directamente por el interesado, solicit??ndolo directamente al Titular, lo que significa que cualquier cliente, suscriptor o colaborador que haya facilitado sus datos en alg??n momento puede dirigirse al Titular y pedir informaci??n sobre los datos que tiene almacenados y c??mo los ha obtenido, solicitar la rectificaci??n de los mismos, solicitar la portabilidad de sus datos personales, oponerse al tratamiento, limitar su uso o solicitar la cancelaci??n de esos datos en los ficheros del Titular.</p>

    <p>Para ejercitar tus derechos de acceso, rectificaci??n, cancelaci??n, portabilidad y oposici??n tienes que enviar un correo electr??nico a jonipiko@gmail.com junto con la prueba v??lida en derecho como una fotocopia del D.N.I. o equivalente.</p>

    <p>Tienes derecho a la tutela judicial efectiva y a presentar una reclamaci??n ante la autoridad de control, en este caso, la Agencia Espa??ola de Protecci??n de Datos, si consideras que el tratamiento de datos personales que te conciernen infringe el Reglamento.</p>

</div>

<div class="finalidad">
    <h2>Finalidad del tratamiento de datos personales</h2>

    <p>Cuando te conectas al sitio Web para mandar un correo al Titular, te suscribes a su bolet??n o realizas una contrataci??n, est??s facilitando informaci??n de car??cter personal de la que el responsable es el Titular. Esta informaci??n puede incluir datos de car??cter personal como pueden ser tu direcci??n IP, nombre y apellidos, direcci??n f??sica, direcci??n de correo electr??nico, n??mero de tel??fono, y otra informaci??n. Al facilitar esta informaci??n, das tu consentimiento para que tu informaci??n sea recopilada, utilizada, gestionada y almacenada por superadmin.es , s??lo como se describe en el Aviso Legal y en la presente Pol??tica de Privacidad.</p>

    <p>Los datos personales y la finalidad del tratamiento por parte del Titular es diferente seg??n el sistema de captura de informaci??n:</p>

    <ul>
        <li>Formularios de contacto: El Titular solicita datos personales entre los que pueden estar: Nombre y apellidos, direcci??n de correo electr??nico, n??mero de tel??fono y direcci??n de tu sitio Web con la finalidad de responder a tus consultas.<br>
Por ejemplo, el Titular utiliza esos datos para dar respuesta a tus mensajes, dudas, quejas, comentarios o inquietudes que puedas tener relativas a la informaci??n incluida en el sitio Web, los servicios que se prestan a trav??s del sitio Web, el tratamiento de tus datos personales, cuestiones referentes a los textos legales incluidos en el sitio Web, as?? como cualquier otra consulta que puedas tener y que no est?? sujeta a las condiciones del sitio Web o de la contrataci??n.</li>
    </ul>

    <p>Existen otras finalidades por las que el Titular trata tus datos personales:</p>
    <ul>
        <li>Para garantizar el cumplimiento de las condiciones recogidas en el Aviso Legal y en la ley aplicable. Esto puede incluir el desarrollo de herramientas y algoritmos que ayuden a este sitio Web a garantizar la confidencialidad de los datos personales que recoge.</li>
        <li>Para apoyar y mejorar los servicios que ofrece este sitio Web.</li>
        <li>Para analizar la navegaci??n. El Titular recoge otros datos no identificativos que se obtienen mediante el uso de cookies que se descargan en tu ordenador cuando navegas por el sitio Web cuyas caracter??siticas y finalidad est??n detalladas en la Pol??tica de Cookies .</li>
        <li>Para gestionar las redes sociales. el Titular tiene presencia en redes sociales. Si te haces seguidor en las redes sociales del Titular el tratamiento de los datos personales se regir?? por este apartado, as?? como por aquellas condiciones de uso, pol??ticas de privacidad y normativas de acceso que pertenezcan a la red social que proceda en cada caso y que has aceptado previamente.</li>
    </ul>
</div>

<div class="aceptacion">
    <h2>Aceptaci??n y consentimiento</h2>

    <p>Como Usuario del sitio Web declaras haber sido informado de las condiciones sobre protecci??n de datos de car??cter personal, aceptas y consientes el tratamiento de los mismos por parte de el Titular en la forma y para las finalidades indicadas en esta Pol??tica de Privacidad.</p>
</div>

<div class="cambios">
    <h2>Cambios en la Pol??tica de Privacidad</h2>

    <p>El Titular se reserva el derecho a modificar la presente Pol??tica de Privacidad para adaptarla a novedades legislativas o jurisprudenciales, as?? como a pr??cticas de la industria.<br>

    Estas pol??ticas estar??n vigentes hasta que sean modificadas por otras debidamente publicadas.</p>
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
              <li><a href="/">Sobre nosotros</a></li>
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