<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dependent;

class DependentsController extends Controller
{
    public function create($id){
      return view('dependent.create');
    }

    public function store(Request $request){

            $dependent = new Dependent;
            $dependent->fill($request->all());
            $dependent->save();

      \Session::flash('success_message', 'Successfully saved!');

            return redirect('member/'.$dependent->member_id);
    }
}
