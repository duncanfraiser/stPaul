<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;

class PrayerController extends Controller
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
        return view('prayer.create');
        }

    public function store(Request $request){
        $prayer = new Prayer;
		$prayer->fill($request->all());
		$prayer->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/');
        }

    public function show($id){
    	$prayer = Prayer::findOrFail($id);        
		return view('prayer.show', compact('prayer'));
        }

    public function edit($id){
    	$prayer = Prayer::findOrFail($id);
    	return view('prayer.edit', compact('prayer'));
        }

    public function update($id, Request $request){
		$input = $request->all();
    	$prayer = Prayer::findOrFail($id);
    	$prayer->fill($request->all());
    	$prayer->save();
    	return redirect('/');
        }

    public function index(){
        $prayers = Prayer::get();
        return view('prayer.index', compact('prayers'));
        }

    public function destroy($id){
        $prayer = Prayer::findOrFail($id);
        $prayer->delete();
        return redirect('/');
        }
}
