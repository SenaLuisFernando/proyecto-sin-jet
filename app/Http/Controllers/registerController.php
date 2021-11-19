<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function create()
    {
        return view('vista8');
    }
    
    public function store(){
        $user = User::create(request(['name','email','password','address'])); 
        auth()->login($user);
        return redirect()->to('/');
    }
}
