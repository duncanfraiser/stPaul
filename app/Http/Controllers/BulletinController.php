<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bulletin;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;

class BulletinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');

        
        $heading = Bulletin::latest()->first();
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
    	return view('bulletin.create');
    }

    public function store(Request $request){
        $bulletin = new Bulletin;
		$bulletin->fill($request->all());
		$bulletin->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/');
    }

    public function show($id){
    	$bulletin = Bulletin::findOrFail($id);
         $archives = Bulletin::orderBy('created_at', 'desc')->get();  
		return view('bulletin.show', compact('bulletin', 'archives'));
    }

    public function edit($id){
    	$bulletin = Bulletin::findOrFail($id);
    	return view('bulletin.edit', compact('bulletin'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$bulletin = Bulletin::findOrFail($id);
    	$bulletin->fill($request->all());
    	$bulletin->save();
    	return redirect('/');

    }

    public function index(){

        $bulletins = Bulletin::orderBy('created_at', 'desc')->get();

        return view('bulletin.index', compact('bulletins'));
    }

        public function destroy($id){
        $announcement = Bulletin::findOrFail($id);
        $announcement->delete();
        return redirect('/');
        }


}
