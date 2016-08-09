<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contemplative;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;

class ContemplativeController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create','edit');

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
        return view('contemplative.create');
        }

    public function store(Request $request){
        $contemplative = new Contemplative;
		$contemplative->fill($request->all());
		$contemplative->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/contemplative/'.$contemplative->id);
        }

    public function show($id){
    	$contemplative = Contemplative::findOrFail($id);        
		return view('contemplative.show', compact('contemplative'));
        }

    public function edit($id){
    	$contemplative = Contemplative::findOrFail($id);
    	return view('contemplative.edit', compact('contemplative'));
        }

    public function update($id, Request $request){
		$input = $request->all();
    	$contemplative = Contemplative::findOrFail($id);
    	$contemplative->fill($request->all());
    	$contemplative->save();
    	return redirect('/contemplative/'.$contemplative->id);
        }

    public function index(){
        $contemplatives = Contemplative::get();
        return view('contemplative.index', compact('contemplatives'));
        }

    public function destroy($id){
        $contemplative = Contemplative::findOrFail($id);
        $contemplative->delete();
        return redirect('/');
        }
}
