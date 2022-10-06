<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorContoller extends Controller
{
    public function index (){
        return view('doctor');
    }
}
