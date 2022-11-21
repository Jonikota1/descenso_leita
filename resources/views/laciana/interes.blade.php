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
</style>


<div class="cuerpo">
    <div class="centro">
        <div>
            <h1>POZO MARIA</h1>
                <img src="{{url('/images/pozo.jpg')}}">
                    <p>En tributo a las familias de los mineros. En honor a todos los valientes de la montaña leonesa, a los que dedicaron su vida a la 
                    <br>mina y a los que la perdieron en el tajo. También en reconocimiento a los diez que fallecieron en sus profundidades el 17 de 
                    <br>octubre de 1979. Por todos ellos, el pozo María de Caboalles de Abajo, emblema de la minería en la comarca, se convertirá en el
                    <br> Archivo Histórico de las Familias Mineras que supondrá dotar de una segunda vida a esta infraestructura como testimonio del 
                    <br>desarrollo industrial del valle</p>
        </div>

        <div>
            <h2>CENTRO DEL UROGALLO</h2>
                <div class="urogallo">
                    <img src="{{url('/images/urogallo.jpg')}}">
                    <img src="{{url('/images/centro.jpg')}}">
                </div>
                    <p>Es un centro de interpretación del Urogallo de la naturaleza en el cual se proyectan 
                        audiovisuales se explica <br>contenidos arquitectónicos de la zona, se explica el habitat
                         del urogallo ,oso, y otras especies de la zona .<br> Es una casa típica de la zona y se
                         caracteriza por que tiene forma de herradura.</p>

                    <p>Se trata de un edificio de nueva planta, diseñado con criterios tradicionales, 
                        logrando una correcta <br>reinterpretación de la casa típica lacianega mediante la tipología constructiva y el tratamiento de materiales <br>externos, 
                        generando una distribución interior con espacios interesantes adecuados para el nuevo uso.</p>
        </div>

        <div>
            <h3>LAGUNA DEL PUERTO</h3>
                <img src="{{url('/images/laguna.jpg')}}">
                    <p>La Laguna de Arbás, o del Puerto, también conocida como Laguna de Cueto Arbás, es un lago de origen glaciar que se encuentra 
                        <br>en el concejo asturiano de Cangas del Narcea, aunque muy cerca de la frontera que limita con el de Villablino, ya en la Provincia de León</p>
                    <p>Además del precioso paisaje a tus alrededores, también podrás realizar una ruta a través de la montaña desde El Puerto Leitariegos 
                        <br>hasta Cuetu de Arbas pasando por este magnífico lugar.
                        La ruta consta de unos 2km de longitud y por montaña, es un lugar magnífico<br> para sacar fotos del paisaje</p>
        </div>
    </div>

    <div class="footer">
        <footer>
            <p style="margin:10px;">Copyright by jonikota</p>
        </footer>
    </div>

</div>


@endsection