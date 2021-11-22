<?php

namespace App\Http\Controllers;

use App\Models\Ambientes;
use Illuminate\Http\Request;

class ambientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambientes = Ambientes::all();
        return view('ambientes.index')->with('ambientes',$ambientes);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ambientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambientes = new Ambientes();

        $ambientes->id = $request->get('id');
        
        $ambientes->cuarto = $request->get('cuarto');
        $ambientes->sala = $request->get('sala');
        $ambientes->garaje = $request->get('garaje');
        $ambientes->cocina = $request->get('cocina');
        $ambientes->baño = $request->get('baño');
       

       $ambientes->save();

       return redirect('/Ambientes');
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
        $ambientes = Ambientes::find($id);
        return view('Ambientes.edit')->with('Ambientes',$ambientes);
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
        $ambientes = Ambientes::find($id);

        $ambientes->id = $request->get('id');
        $ambientes->cuarto = $request->get('cuarto');
        $ambientes->sala = $request->get('sala');
        $ambientes->garaje = $request->get('garaje');
        $ambientes->cocina = $request->get('cocina');
        $ambientes->baño = $request->get('baño');
       
 
        $ambientes->save();
 
        return redirect('/Ambientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ambientes = Ambientes::find($id);
        $ambientes->delete();
        return redirect('/Ambientes');
    }
}
