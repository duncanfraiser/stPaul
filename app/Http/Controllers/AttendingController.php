<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attending;
use App\Http\Requests;

class AttendingController extends Controller
{
        public function index()
    {
        $attendings = Attending::all();
        return view('show', compact('attendings'));
    }

       public function create()
    {
        //$attending = Attending::latest()->take(5)->get();
        return view('create');//, compact('attending'));
    }

       public function store(Request $request)
    {

        $input = $request->all();


        $attending = new Attending;
        $attending->time = $input['time'];
        $attending->save();
    }


        public function show()
        {
   
        }

        public function update(Request $request, $id)
        {
            $attending = Attending::findOrFail($id);
           
            $input = $request->all();

            $attending->fill($input);
            $attending->save();

            return redirect('/attending');
        }

}
