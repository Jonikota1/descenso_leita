<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bicis;

class BicisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bicis::create([
            'nombre' => "Demo Race GLOSS RED ONYX / FLO RED SPECKLES / SATIN BLACK / DOVE GREY",
            'descripcion' => "La velocidad máxima siempre ha sido el objetivo de la Demo, y con la Demo Race no es diferente. Con un cuadro rediseñado para poder adaptar varios tamaños de rueda trasera, permite aprovechar la máxima tracción de una rueda delantera de 29 pulgadas con la maniobrabilidad de una rueda trasera de 27.5 pulgadas, una combinación especial que ha sido utilizada por el campeón Mundial Loic Bruni durante toda la temporada. Esta combinación es el equilibrio perfecto, pero hasta que la UCI dió luz verde no pudo utilizarse en competición, pero al hacerlo, conseguimos el Campeonato del Mundo y la general de la Copa del Mundo.",
            'precio' =>"9200",
            'imagen' =>"demo_race.jpg"
        ]);

        Bicis::create([
            'nombre' => "Demo Race Frameset : GLOSS BLACK CHROME / LIMESTONE SPECKLES / SATIN BLACK / CHROME",
            'descripcion' => "Con el mismo cuadro que el utilizado en la espectacular temporada del circuito de la Copa del Mundo, el cuadro Demo Race incluye la compatibilidad de la rueda trasera de 27.5/ 29 pulgadas para obtener el mejor equilibrio óptimo de velocidad, tracción y maniobrabilidad, al tiempo que permite una versatilidad inigualable.",
            'precio' =>"3800",
            'imagen' =>"cuadro_demo_race1.jpg"
        ]);

        Bicis::create([
            'nombre' => "Demo Expert GLOSS SILVER DUST / CHARCOAL TINT GRAVITY FADE / WHITE W/ RED GHOST ",
            'descripcion' => "Combina la irracional sensación por la velocidad, con la versatilidad de poder montar una rueda de 29 pulgadas, para beneficiarse de la tracción que aporta este tamaño de rueda, junto a la agilidad que transmite una rueda trasera de 27.5, y obtendrás la Demo más rápida y con mayor capacidad hasta la fecha. La Demo Expert aporta todo el control y estabilidad gracias a su horquilla RockShox Boxxer Select 29 con cartucho de aire DebonAir DH y un amortiguador de muelle Super Deluxe, con ajuste de rebote externo. Depende del estilo de conducción que tenga o que el terreno requiera, podrá montar rueda trasera de 29 pulgadas o 27.5, adaptando la geometría al tamaño elegido.",
            'precio' =>"5600",
            'imagen' =>"demo_expert.jpg"
        ]);

        Bicis::create([
            'nombre' => "Gambit",
            'descripcion' => "Redefine tu zona de confort. Un casco integral con certificado para DH con la ventilación y el ajuste de un casco abierto. Nuestro equipo de desarrollo ha trabajado en conjunto para que todos estos factores estuviesen interconectados durante las fases de diseño e ingeniería, y así crear un casco con un rendimiento revolucionario que ofrece más que la suma de sus partes",
            'precio' =>"360",
            'imagen' =>"casco_gambit.jpg"
        ]);

        Bicis::create([
            'nombre' => "S-Works Dissident",
            'descripcion' => ": Si superas los límites de la velocidad en descenso y en voladas, el S-Works Dissident es para ti. Nuestras almohadillas esculpidas en 3D, y el 4th Dimension Cooling System mantienen la ventilación, mientras que la carcasa Carbon Matrix lo mantiene lo suficientemente liviano para brindar comodidad durante todo el día.",
            'precio' =>"500",
            'imagen' =>"casco_works.jpg"
        ]);

        Bicis::create([
            'nombre' => "Kenevo Comp",
            'descripcion' => "La Kenevo es la eMTB con mayor rendimiento que puedes encontrar, con 180 mm de suspensión delantera y trasera, el motor más suave y potente disponible, y ahora con más kilómetros por carga que nunca. Nuestro modelo Kenevo Comp combina toda esa tecnología con un conjunto de componentes inteligentemente escogidos que soportarán las condiciones y a los usuarios más exigentes.",
            'precio' =>"6900",
            'imagen' =>"kenevo_comp.jpg"
        ]);

        Bicis::create([
            'nombre' => "Kenevo Expert",
            'descripcion' => "Lo sentimos por los telesillas y remontes, la Kenevo Expert acaba de haceros obsoletos. Es la bicicleta que te permite superar las subidas más largas y complicadas con energía de sobra para que puedas aplicarte en los descensos más largos y complicados. La Kenevo Expert es, sin lugar a dudas, la eMTB más eficiente que existe, gracias a sus 180 mm de suspensión delantera y trasera RockShox y su nuevo cuadro con brazo lateral asimétrico que aumenta tu control. Añade una batería de 700 vatios por hora, líder en su clase, y tendrás una bicicleta que no tiene límites.",
            'precio' =>"9400",
            'imagen' =>"kenevo_expert.jpg"
        ]);

        Bicis::create([
            'nombre' => "Guantes Ridge",
            'descripcion' => "Los ciclistas serios exigen comodidad, movilidad y protección, y los guantes Ridge cumplen con todos estos frentes. Su diseño duradero de dedo completo cuenta con tecnologías innovadoras, como nuestra protección de nudillos de espuma XRD, un ajuste articulado precurvado y una impresión de silicona conductora en el pulgar y el dedo índice para una conveniente compatibilidad con la pantalla táctil. Y de manera impresionante, logramos todo esto sin dejar de brindar una apariencia limpia para impresionar a sus amigos del sendero.",
            'precio' =>"32",
            'imagen' =>"guante_ridge.jpg"
        ]);

        Bicis::create([
            'nombre' => "Sender CFR Mullet Underdog",
            'descripcion' => "No deberías subestimar la capacidad de esta máquina. Buscando la línea perfecta o marcando el mejor tiempo, la Sender es una bicicleta de descenso diseñada para competir. Ahora con un color exclusivo y acabado prémium.",
            'precio' =>"5000",
            'imagen' =>"cranyon1.jpg"
        ]);

        Bicis::create([
            'nombre' => "IXS Hack Race Knee Guards",
            'descripcion' => "Ofreciendo una protección excepcional, la rodillera IXS Hack Race contiene características que se encuentran en las series Flow y Carve, pero a un precio más competitivo.",
            'precio' =>"70",
            'imagen' =>"rodillera.jpg"
        ]);

        Bicis::create([
            'nombre' => "Trajecta Fidlock Fullface Helmet",
            'descripcion' => "¡Un casco de descenso/enduro listo para los senderos más desafiantes!",
            'precio' =>"220",
            'imagen' =>"casco_cranyon.jpg"
        ]);
    }
}
