<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class DoctorController extends Controller
{
    //
    public function index()
    {
        return view('layouts.doctor');
    }

}
