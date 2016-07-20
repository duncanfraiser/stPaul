<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Rcia;

class RciaController extends Controller
{
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
