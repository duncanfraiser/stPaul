<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Youth;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;

class YouthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');

        $heading = Youth::latest()->first();
        \View::share('heading', $heading);

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
    	return view('youth.create');
    }

    public function store(Request $request){
        $youth = new Youth;
		$youth->fill($request->all());
		$youth->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/');
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
    	return redirect('/');

    }

    public function index(){

        $youths = Youth::get();

        return view('youth.index', compact('youths'));
    }
}
