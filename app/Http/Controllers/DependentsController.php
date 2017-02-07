<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dependent;
use App\Member;
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


            $this->validate($request,[
                'firstName' => 'required',
                'lastName' => 'required',
                'sex' => 'required',
                'dob' => 'required',
                ]);

            $dependent = new Dependent;
            $dependent->fill($request->all());
            $dependent->save();

            return redirect('member/'.$dependent->member_id);
    }

    public function show($member, $id){
        $member=Member::findOrFail($member);
        $dependent=Dependent::findOrFail($id);
        return view('dependent.show',compact('member','dependent'));
    }

}
