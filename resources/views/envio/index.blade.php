@extends('layouts.app')
@section('content')

<script>
        function testCampo(campo, idEtiqueta, msgError) {
            if (campo.checkValidity() == false) {
                document.getElementById(idEtiqueta).innerHTML = " " + msgError
                campo.setCustomValidity("")
            } else {
                document.getElementById(idEtiqueta).innerHTML = " &#10004;"
            }
        }

        function objeto() {
            var act=document.getElementById("objeto");
            if(!act.checked){
			act.setCustomValidity("Hay que coger un objeto")
			}
			else{
			act.setCustomValidity("")}
        }

</script>
<form class="container mx-auto  items-center px-6 " method="POST" action="{{route('envio.create')}}">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
    <div class="flex flex-wrap -mx-3 mb-6">
        <h1 style="color:#59d0f7;">Datos de envío</h1>
        <div class="w-full px-3">
            <br><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Nombre y Apellidos
            </label>
            <input name="nombre" value="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text" required pattern="^([a-zA-Z]+)(\s[a-zA-Z]+)*$" oninput="testCampo(this,'lbl1','Solo Alfabéticos')">
            <label id="lbl1"></label>
            <p class="text-gray-600 text-xs italic"></p>
            @error("name")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <br><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Correo (Mismo que el de pago)
            </label>
            <input name="correo" value="correo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
            <p class="text-gray-600 text-xs italic"></p>
            @error("correo")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <br><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dni">
                DNI
            </label>
            <input name="dni" value="dni" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dni" type="text" required pattern="^[0-9]{7,8}[A-Z]+$" oninput="testCampo(this,'lbl2','8 números y una letra mayúscula')">
            <label id="lbl2"></label>
            <p class="text-gray-600 text-xs italic"></p>
            @error("dni")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                Dirección
            </label>
            <textarea name="direccion" class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="direccion" required pattern="^[A-Za-z0-9\s/,\-#]+$" oninput="testCampo(this,'lbl3','Letras, números, coma y guión')"></textarea>
            <label id="lbl3"></label>
            @error("mensaje")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <br><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Poblacion
            </label>
            <input name="poblacion" value="poblacion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="poblacion" type="text" required pattern="^([a-zA-Z]+)(\s[a-zA-Z]+)*$" oninput="testCampo(this,'lbl4','Solo Alfabéticos')">
            <label id="lbl4"></label>
            <p class="text-gray-600 text-xs italic"></p>
            @error("poblacion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <br><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="postal">
                Código Postal
            </label>
            <input name="postal" value="postal" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="postal" type="text" required pattern="^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$" oninput="testCampo(this,'lbl5','5 números que empiezan desde 01 hasta 52')">
            <label id="lbl5"></label>
            <p class="text-gray-600 text-xs italic"></p>
            @error("postal")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <br><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="objeto">
                Seleccione el/los objeto/s comprados y señala la cantidad
            </label>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="Demo Race GLOSS RED ONYX / FLO RED SPECKLES / SATIN BLACK / DOVE GREY" onclick="objeto()"> Demo Race GLOSS RED ONYX / FLO RED SPECKLES / SATIN BLACK / DOVE GREY <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="Demo Race Frameset : GLOSS BLACK CHROME / LIMESTONE SPECKLES / SATIN BLACK / CHROME" onclick="objeto()"> Demo Race Frameset : GLOSS BLACK CHROME / LIMESTONE SPECKLES / SATIN BLACK / CHROME <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="Demo Expert GLOSS SILVER DUST / CHARCOAL TINT GRAVITY FADE / WHITE W/ RED GHOST" onclick="objeto()"> Demo Expert GLOSS SILVER DUST / CHARCOAL TINT GRAVITY FADE / WHITE W/ RED GHOST <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="Gambit" onclick="objeto()"> Gambit <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="S-Works Dissident" onclick="objeto()"> S-Works Dissident <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="Kenevo Comp" onclick="objeto()"> Kenevo Comp <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px"value="Kenevo Expert" onclick="objeto()"> Kenevo Expert <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="Guantes Ridge" onclick="objeto()"> Guantes Ridge <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px"value="Sender CFR Mullet Underdog" onclick="objeto()"> Sender CFR Mullet Underdog <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px" value="IXS Hack Race Knee Guards" onclick="objeto()"> IXS Hack Race Knee Guards <input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;"><br>
            <input name="objeto[]" id="objeto" type="checkbox" style="margin-bottom:10px"value="Trajecta Fidlock Fullface Helmet" onclick="objeto()"> Trajecta Fidlock Fullface Helmet<input type="number" name="cantidad[]" id="cantidad" style="background-color:lightgrey; margin-left:20px; border-color:black;">
        </div>
    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" onclick="objeto()">
                Enviar
            </button>
        </div>
    </div>
</form>
@if(session('info'))
<script>
alert("{{(session('info'))}}");
</script>
@endif
@endsection