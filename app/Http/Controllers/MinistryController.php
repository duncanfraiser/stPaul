<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ministry;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class MinistryController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create','edit');
        $heading = Ministry::latest()->first();
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
        return view('ministry.create');
        }

    public function store(Request $request){
        $ministry = new Ministry;
		$ministry->fill($request->all());
		$ministry->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/');
        }

    public function show($id){
    	$ministry = Ministry::findOrFail($id); 
        $archives = Ministry::orderBy('created_at', 'desc')->get();  
		return view('ministry.show', compact('ministry', 'archives'));

        }

    public function edit($id){
    	$ministry = Ministry::findOrFail($id);
    	return view('ministry.edit', compact('ministry'));
        }

    public function update($id, Request $request){
		$input = $request->all();
    	$ministry = Ministry::findOrFail($id);
    	$ministry->fill($request->all());
    	$ministry->save();
    	return redirect('/');
        }

    public function index(){
        $ministries = Ministry::orderBy('created_at', 'desc')->get();
        return view('ministry.index', compact('ministries'));
        }

    public function destroy($id){
        $ministry = Ministry::findOrFail($id);
        $ministry->delete();
        return redirect('/');
        }
}


