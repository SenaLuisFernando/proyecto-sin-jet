<?php

namespace App\Http\Controllers;
use App\Models\Propiedades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function shop()
    {
        $propiedades = Propiedades::all();
       // dd($propiedades);
        return view('vista6')->withTitle('E-COMMERCE STORE | SHOP')->with(['propiedades' => $propiedades]);
    }

   
}
