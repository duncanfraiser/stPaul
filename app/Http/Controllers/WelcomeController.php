<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Welcome;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;




class WelcomeController extends Controller
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
    	return view('welcome.create');
    }

    public function store(Request $request){
        $welcome = new Welcome;
		$welcome->fill($request->all());
		$welcome->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('welcome/'.$welcome->id);
    }

    public function show($id){
    	$welcome = Welcome::findOrFail($id);
		return view('welcome.show', compact('welcome'));
    }

    public function edit($id){
    	$welcome = Welcome::findOrFail($id);
    	return view('welcome.edit', compact('welcome'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$welcome = Welcome::findOrFail($id);
    	$welcome->fill($request->all());
    	$welcome->save();
    	return redirect('welcome/'.$id);

    }
}
