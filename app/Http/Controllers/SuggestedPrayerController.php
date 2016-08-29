<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class SuggestedPrayerController extends Controller
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
        return view('suggested_prayer.create');
        }

    public function store(Request $request){
        $suggestedprayer = new Suggested_Prayer;
		$suggestedprayer->fill($request->all());
		$suggestedprayer->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/suggested_prayer/'.$suggestedprayer->id);
        }

    public function show($id){
    	$suggestedprayer = Suggested_Prayer::findOrFail($id);     
        $archives = Suggested_Prayer::orderBy('created_at', 'desc')->get(); 
        
		return view('suggested_prayer.show', compact('suggestedprayer', 'archives'));
        }

    public function edit($id){
    	$suggestedprayer = Suggested_Prayer::findOrFail($id);
    	return view('suggested_prayer.edit', compact('suggestedprayer'));
        }

    public function update($id, Request $request){
		$input = $request->all();
    	$suggestedprayer =Suggested_Prayer::findOrFail($id);
    	$suggestedprayer->fill($request->all());
    	$suggestedprayer->save();
    	return redirect('/suggested_prayer/'.$suggestedprayer->id);
        }

    public function index(){
        $suggestedprayers = Suggested_Prayer::get();
 
        return view('suggested_prayer.index', compact('suggestedprayers'));
        }

    public function destroy($id){
        $suggestedprayer = Suggested_Prayer::findOrFail($id);
        $suggestedprayer->delete();
        return redirect('/');
        }
}
