<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionsController extends Controller
{
    public function create(){
        return view('vista1');
    } 

    public function store(){
        if(auth()->attempt(request(['email','password']))==false ){

            return back()->withErrors([
                'message '=>'el email o la contraseña son incorrectas por favor intente de nuevo'
            ]);
        } else{
            if(auth()->user()->role == 'admin')
            {
                return redirect()->route('admin.index');
            }
            else
            {
                return redirect()->to('/');
            }
        }
        
    }

    public function destroy(){
        auth()->logout();
        return redirect()->route('login.index');
    }
}
