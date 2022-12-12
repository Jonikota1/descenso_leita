<?php

namespace App\Http\Controllers;

use App\Models\Alojamientos;
use Illuminate\Http\Request;

class AlojamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alojamientos = Alojamientos::all();
        return view("alojamientos.index", compact("alojamientos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alojamiento = new Alojamientos;
        $title = __("Introducir nombre del alojamiento");
        $textButton = __("Introducir");
        $route = route("alojamientos.store");
        return view("alojamientos.create", compact("title", "textButton", "route", "alojamiento"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nombre" => "required|max:240",
            "descripcion" => "nullable|string|min:5",
            "precio" => "required|max:10",
            "enlace" => "required|min:5",
            "imagen"=> "required|max:50",
        ]);
        Alojamientos::create($request->only( 
        "nombre",
        "descripcion",
        "precio",
        "enlace",
        "imagen"));
        return redirect(route("alojamientos.index"))
            ->with("success", __("Hemos añadido el objeto."));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alojamientos  $alojamientos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alojamientos = Alojamientos::find($id);
        return view('alojamientos.show', ['alojamientos'=>$alojamientos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alojamientos  $alojamientos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alojamientos $alojamiento)
    {
        $update = true;
        $title = __("Editar alojamiento");
        $textButton = __("Actualizar");
        $alojamiento = Alojamientos::find($alojamiento->id);
        $route = route("alojamientos.update", ["alojamiento" => $alojamiento]);
        return view("alojamientos.edit",compact("update", "title", "textButton", "route", "alojamiento"))->with('alojamiento',$alojamiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alojamientos  $alojamientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alojamientos $alojamiento)
    {
        $alojamientos = Alojamientos::find($alojamiento->id);
 
        $alojamientos->nombre = $request->get('nombre');
        $alojamientos->descripcion = $request->get('descripcion');
        $alojamientos->precio = $request->get('precio');
        $alojamientos->enlace = $request->get('enlace');
        $alojamientos->imagen = $request->get('imagen');
 
        $alojamientos->save();
     
        return redirect(route("alojamientos.index"))->with("success", __("El alojamiento ha sido actualizado"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alojamientos  $alojamientos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alojamientos $alojamiento)
    {
        $alojamientos = Alojamientos::find($alojamiento->id);
 
        $alojamientos->delete();
        return redirect(route("alojamientos.index"))->with("success", __("El apartamento ha sido eliminado"));
    }
}
