<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Youth;

class YouthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');
    }


    public function create(){
    	return view('youth.create');
    }

    public function store(Request $request){
        $youth = new Youth;
		$youth->fill($request->all());
		$youth->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('youth/'.$youth->id);
    }

    public function show($id){
    	$youth = Youth::findOrFail($id);
        
		return view('youth.show', compact('youth'));
    }

    public function edit($id){
    	$youth = Youth::findOrFail($id);
    	return view('youth.edit', compact('youth'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$youth = Youth::findOrFail($id);
    	$youth->fill($request->all());
    	$youth->save();
    	return redirect('youth/'.$id);

    }

    public function index(){

        $youths = Youth::get();

        return view('youth.index', compact('youths'));
    }
}
