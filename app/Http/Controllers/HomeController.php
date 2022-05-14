<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        if(Auth::user()->role == 1){
            return view('layouts.moh');

        }
        else if(Auth::user()->role == 2){
            return view('layouts.doctor');
        }
        else if(Auth::user()->role == 3){
            return view('layouts.parent');
        }
    }
}


    
    

