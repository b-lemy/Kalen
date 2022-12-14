<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    public function index(){
        $appoints = Appointment::all();
        $users= User::all()->where('usertype', '0');

        return view('user',compact('appoints','users'));
    }
}
