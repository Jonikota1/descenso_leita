<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;
use App\Models\User;
class EnvioController extends Controller
{

    public function index(){
        
        return view('envio.index');
    }

    public function create (Request $request)
    {
        $nombre=$request->nombre;
        $correo=$request->correo;
        $dni=$request->dni;
        $direccion=$request->direccion;
        $postal=$request->postal;
        $poblacion=$request->poblacion;
        $objetos=(isset($_POST['objeto'])) ? $_POST['objeto'] : [];
        $objeto = implode(";", $objetos);
        $cantidades= (isset($_POST['cantidad'])) ? $_POST['cantidad'] : [];
        $result = array_filter( $cantidades, 'strlen' );
        $cantidad= implode("*",$result);


        Envio::create([
        "nombre"=>$nombre,
        "correo"=>$correo,
        "dni"=>$dni,
        "direccion"=>$direccion,
        "postal"=>$postal,
        "poblacion"=>$poblacion,
        "objeto"=>$objeto,
        "cantidad"=>$cantidad]);
        
        return redirect(url("/gracias"));

    }

    public function datos (Request $request){

        $envios = Envio::all();
        $payment= Payment::all();

        return view("envio.datos", compact("envios","payment"));
    }
}
