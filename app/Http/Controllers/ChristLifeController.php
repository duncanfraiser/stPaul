<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ChristLife;

class ChristLifeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit');
    }

	public function create(){
    	return view('christlife.create');
    }

    public function store(Request $request){
        $christlife = new ChristLife;
		$christlife->fill($request->all());
		$christlife->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('ChristLife/'.$christlife->id);
    }

    public function show($id){
    	$christlife = ChristLife::findOrFail($id);
		return view('christlife.show', compact('christlife'));
    }

    public function edit($id){
    	$christlife = ChristLife::findOrFail($id);
    	return view('christlife.edit', compact('christlife'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$christlife = ChristLife::findOrFail($id);
    	$christlife->fill($request->all());
    	$christlife->save();
    	return redirect('ChristLife/'.$id);

    }
}
