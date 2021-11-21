<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedades;

class propiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = Propiedades::all();
        return view('propiedades.index')->with('propiedades',$propiedades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propiedades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propiedades = new Propiedades();

        $propiedades->id = $request->get('id');
        
        $propiedades->Descripcion = $request->get('Descripcion');
        $propiedades->tipo = $request->get('tipo');
        $propiedades->detalle = $request->get('detalle');
        $propiedades->ubicacion = $request->get('ubicacion');
        $propiedades->precio = $request->get('precio');
       

       $propiedades->save();

       return redirect('/Propiedades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propiedades = Propiedades::find($id);
        return view('Propiedades.edit')->with('Propiedades',$propiedades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $propiedades = Propiedades::find($id);

        $propiedades->id = $request->get('id');
        $propiedades->Descripcion = $request->get('Descripcion');
        $propiedades->tipo = $request->get('tipo');
        $propiedades->detalle = $request->get('detalle');
        $propiedades->ubicacion = $request->get('ubicacion');
        $propiedades->precio = $request->get('precio');
       
 
        $propiedades->save();
 
        return redirect('/Propiedades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propiedades = Propiedades::find($id);
        $propiedades->delete();
        return redirect('/Propiedades');
    }
}
