<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dependent;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class DependentsController extends Controller
{

    public function __construct(){
        $prayer = Prayer::latest()->first();                
        \View::share('prayer', $prayer);

        $suggestedprayer = Suggested_Prayer::latest()->first();                
        \View::share('suggestedprayer', $suggestedprayer);

        $divina = Divina::latest()->first();                
        \View::share('divina', $divina);

        $contemplative = Contemplative::latest()->first();                
        \View::share('contemplative', $contemplative);
    }


    public function create($id){

      return view('dependent.create', compact('id'));
    }

    public function store(Request $request){

            $dependent = new Dependent;
            $dependent->fill($request->all());
            $dependent->save();

      \Session::flash('success_message', 'Successfully saved!');

            return redirect('member/'.$dependent->member_id);
    }
}
