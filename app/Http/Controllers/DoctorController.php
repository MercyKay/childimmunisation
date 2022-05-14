<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\User;
use App\Models\Children;
class DoctorController extends Controller
{
    //
    public function index()
    {
        return view('layouts.doctor');
    }

    public function immunization()
    {
        return view('layouts.immunization');
    }

    public function registerbirth()
    {
        return view('layouts.registerbirth');
    }

    public function dashboard()
    {
        return view('layouts.dashboard');
    }

    public function users()
    {
        
        $user = User::orderBy('name','Desc')->get(); 
        
        return view('layouts.datatable',compact('user'));

    }

   

}
