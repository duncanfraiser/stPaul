<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Catechumen;

class CatechumensController extends Controller
{
	public function create(){
    	return view('catechumen.create');
    }

    public function store(Request $request){
        $catechumen = new Catechumen;
		$catechumen->fill($request->all());
		$catechumen->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('catechumen/'.$catechumen->id);
    }

    public function show($id){
    	$catechumen = Catechumen::findOrFail($id);
		return view('catechumen.show', compact('catechumen'));
    }

    public function edit($id){
    	$catechumen = Catechumen::findOrFail($id);
    	return view('catechumen.edit', compact('catechumen'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$catechumen = Catechumen::findOrFail($id);
    	$catechumen->fill($request->all());
    	$catechumen->save();
    	return redirect('catechumen/'.$id);

    }
}
