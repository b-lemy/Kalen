<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $docs= User::all()->where('usertype', '1');

        return view('appointment',compact('docs'));
    }

    public function create(Request $request){
        $appoint = Appointment::create([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'date'=>$request->input('date'),
            'message'=>$request->input('message'),
            'doctor'=>$request->input('doctor'),


        ]);
      $appoint->save();

     return redirect('/');

    }

        public function destroy(Appointment $appointment)
        {
            $appointment->delete();

            return redirect()->route('user')
                ->withSuccess(__('Post delete successfully.'));
    }
}
