<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorContoller extends Controller
{
    public function index (){
        $appoints = Appointment::all();
        $docs= User::all()->where('usertype', '1');
        return view('doctor',compact('docs','appoints'));
    }
}
