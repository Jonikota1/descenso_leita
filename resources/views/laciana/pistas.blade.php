@extends("layouts.app")
@section("content")

<style>
    .footer{
  background-color:black;
  text-align:center;
  color:white;
}
</style>

<div style="width:90%; margin:auto;">
    <h1 style="margin-top:25px; margin-bottom:25px; color:brown;">Nuestras pistas en Leitariegos </h1>
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

    <h2 style="margin-top:25px; margin-bottom:25px; color:brown;">Distancia en Km para llegar a las pistas</h2>
        <p style="margin-top:25px; margin-bottom:25px;">En el siguiente cuadro vemos la distancia que hay desde las principales ciudades más cercanas a las pistas </p>
        <img src="{{url('/images/distancia.png')}}">
</div>

        <div class="footer">
            <footer>
                <p style="margin:10px;">Copyright by jonikota</p>
            </footer>
        </div>


@endsection