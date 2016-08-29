<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;

class DivinaController extends Controller
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
        return view('Lectio_Divina.create');
        }

    public function store(Request $request){
        $divina = new Divina;
		$divina->fill($request->all());
		$divina->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/Lectio_Divina/'.$divina->id);
        }

    public function show($id){
    	$divina = Divina::findOrFail($id);        
         $archives = Divina::orderBy('created_at', 'desc')->get(); 
		return view('Lectio_Divina.show', compact('divina', 'archives'));
        }

    public function edit($id){
    	$divina = Divina::findOrFail($id);
    	return view('Lectio_Divina.edit', compact('divina'));
        }

    public function update($id, Request $request){
		$input = $request->all();
    	$divina = Divina::findOrFail($id);
    	$divina->fill($request->all());
    	$divina->save();
    	return redirect('/Lectio_Divina/'.$divina->id);
        }

    public function index(){
        $divinas = Divina::get();
        return view('Lectio_Divina.index', compact('divinas'));
        }

    public function destroy($id){
        $divina = Divina::findOrFail($id);
        $divina->delete();
        return redirect('/');
        }
}
