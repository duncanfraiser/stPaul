<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Masstime;

class MasstimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');
    }


    public function create(){
    	return view('masstime.create');
    }

    public function store(Request $request){
        $masstime = new Masstime;
		$masstime->fill($request->all());
		$masstime->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('masstime/'.$masstime->id);
    }

    public function show($id){
    	$masstime = Masstime::findOrFail($id);
		return view('masstime.show', compact('masstime'));
    }

    public function edit($id){
    	$masstime = Masstime::findOrFail($id);
    	return view('masstime.edit', compact('masstime'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$masstime = Masstime::findOrFail($id);
    	$masstime->fill($request->all());
    	$masstime->save();
    	return redirect('masstime/'.$id);

    }

    public function index(){

        $masstimes = Masstime::get();

        return view('masstime.index', compact('masstimes'));
    }
}
