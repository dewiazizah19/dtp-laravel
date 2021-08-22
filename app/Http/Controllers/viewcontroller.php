<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function icons(){
        $Nama = "100 Awesome Nucleo Icons";
        return view('icons', ['nama' => $Nama]);
    }

    public function map(){
        return view('map');
    }

    public function notifications(){
        return view('notifications');
    }

    public function user(){
        return view('user');
    }

    public function tables(){
        return view('tables');
    }

    public function typography(){
        return view('typography');
    }

    public function upgrade(){
        return view('upgrade');
    }
}
