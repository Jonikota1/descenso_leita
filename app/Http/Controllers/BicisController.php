<?php

namespace App\Http\Controllers;

use App\Models\Bicis;
use Illuminate\Http\Request;

class BicisController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $bicis = Bicis::all();
        return view("bicis.index", compact("bicis"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bici = new Bicis;
        $title = __("Introducir nombre objeto");
        $textButton = __("Introducir");
        $route = route("bicis.store");
        return view("bicis.create", compact("title", "textButton", "route", "bici"));
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
            "stock" => "required|max:20",
            "precio" => "required|max:10",
            "imagen"=> "required|max:50",
        ]);
        Bicis::create($request->only( 
        "nombre",
        "descripcion",
        "stock",
        "precio",
        "imagen"));
        return redirect(route("bicis.index"))
            ->with("success", __("Hemos añadido el objeto."));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bicis  $bicis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bicis = Bicis::find($id);
    return view('bicis.show', ['bicis'=>$bicis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bicis  $bicis
     * @return \Illuminate\Http\Response
     */
    public function edit(Bicis $bici)
    {
        $update = true;
        $title = __("Editar objeto");
        $textButton = __("Actualizar");
        $bici = Bicis::find($bici->id);
        $route = route("bicis.update", ["bici" => $bici]);
        return view("bicis.edit",compact("update", "title", "textButton", "route", "bici"))->with('bici',$bici);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bicis  $bicis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bicis $bici)
    {
        $bicis = Bicis::find($bici->id);
 
        $bicis->nombre = $request->get('nombre');
        $bicis->descripcion = $request->get('descripcion');
        $bicis->stock = $request->get('stock');
        $bicis->precio = $request->get('precio');
        $bicis->imagen = $request->get('imagen');
 
        $bicis->save();
     
        return redirect(route("bicis.index"))->with("success", __("El objeto ha sido actualizado"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bicis  $bicis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bicis $bici)
    {
        $bicis = Bicis::find($bici->id);
 
        $bicis->delete();
        return redirect(route("bicis.index"))->with("success", __("El objeto ha sido eliminado"));
    }
}
