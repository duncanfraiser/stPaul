<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Homily;

class HomilyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');

        $heading = Homily::latest()->first();
        \View::share('heading', $heading);
    }

    public function create(){
    	return view('homily.create');
    }

    public function store(Request $request){
        $homily = new Homily;
		$homily->fill($request->all());
		$homily->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('homily/'.$homily->id);
    }

    public function show($id){
    	$homily = Homily::findOrFail($id);
        
		return view('homily.show', compact('homily'));
    }

    public function edit($id){
    	$homily = Homily::findOrFail($id);
    	return view('homily.edit', compact('homily'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$homily = Homily::findOrFail($id);
    	$homily->fill($request->all());
    	$homily->save();
    	return redirect('homily/'.$id);

    }

    public function index(){

        $homilies = Homily::get();

        return view('homily.index', compact('homilies'));
    }
}
