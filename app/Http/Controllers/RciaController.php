<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Rcia;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class RciaController extends Controller
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


	public function create(){
    	return view('rcia.create');

    }

    public function store(Request $request){
        $rcia = new Rcia;
		$rcia->fill($request->all());
		$rcia->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('RCIA/'.$rcia->id);
    }

    public function show($id){
    	$rcia = Rcia::findOrFail($id);
		return view('rcia.show', compact('rcia'));
    }

    public function edit($id){
    	$rcia = Rcia::findOrFail($id);
    	return view('rcia.edit', compact('rcia'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$rcia = Rcia::findOrFail($id);
    	$rcia->fill($request->all());
    	$rcia->save();
    	return redirect('RCIA/'.$id);

    }
}
