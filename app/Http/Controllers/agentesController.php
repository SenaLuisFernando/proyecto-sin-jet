<?php

namespace App\Http\Controllers;

use App\Models\Agentes;
use Illuminate\Http\Request;

class agentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentes = Agentes::all();
        return view('agentes.index')->with('agentes',$agentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agentes = new Agentes();

        $agentes->id = $request->get('id');
        
        $agentes->nombre = $request->get('nombre');
        $agentes->telefono = $request->get('telefono');
        $agentes->correo = $request->get('correo');
        $agentes->imagen = $request->get('imagen');
        $agentes->detalle = $request->get('detalle');
       

       $agentes->save();

       return redirect('/Agentes');
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
        $agentes = Agentes::find($id);
        return view('Agentes.edit')->with('Agentes',$agentes);
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
        $agentes = Agentes::find($id);

        $agentes->id = $request->get('id');
        $agentes->nombre = $request->get('nombre');
        $agentes->telefono = $request->get('telefono');
        $agentes->correo = $request->get('correo');
        $agentes->imagen = $request->get('imagen');
        $agentes->detalle = $request->get('detalle');
       
 
        $agentes->save();
 
        return redirect('/Agentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agentes = Agentes::find($id);
        $agentes->delete();
        return redirect('/Agentes');
    }
}
