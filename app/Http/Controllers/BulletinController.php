<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bulletin;

class BulletinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');

        
        $heading = Bulletin::latest()->first();
        \View::share('heading', $heading);
    }


    public function create(){
    	return view('bulletin.create');
    }

    public function store(Request $request){
        $bulletin = new Bulletin;
		$bulletin->fill($request->all());
		$bulletin->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('bulletin/'.$bulletin->id);
    }

    public function show($id){
    	$bulletin = Bulletin::findOrFail($id);
		return view('bulletin.show', compact('bulletin'));
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
    	return redirect('bulletin/'.$id);

    }

    public function index(){

        $bulletins = Bulletin::get();

        return view('bulletin.index', compact('bulletins'));
    }
}
