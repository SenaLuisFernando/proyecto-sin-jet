<?php

namespace App\Http\Controllers;

use App\Models\Ofertas;
use Illuminate\Http\Request;

class ofertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Ofertas::all();
        return view('ofertas.index')->with('ofertas',$ofertas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ofertas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ofertas = new Ofertas();

        $ofertas->id = $request->get('id');
        
        $ofertas->estado = $request->get('estado');
        

       $ofertas->save();

       return redirect('/Ofertas');
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
        $ofertas = Ofertas::find($id);
        return view('Ofertas.edit')->with('Ofertas',$ofertas);
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
        $ofertas = Ofertas::find($id);

        $ofertas->id = $request->get('id');
        $ofertas->estado = $request->get('estado');
       
 
        $ofertas->save();
 
        return redirect('/Ofertas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ofertas = Ofertas::find($id);
        $ofertas->delete();
        return redirect('/Ofertas');
    }
}
