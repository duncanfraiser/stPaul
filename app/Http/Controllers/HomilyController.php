<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Homily;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class HomilyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');

        $heading = Homily::latest()->first();
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
        $archives = Homily::orderBy('created_at', 'desc')->get();  
        
		return view('homily.show', compact('homily', 'archives'));
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

        $homilies = Homily::orderBy('created_at', 'desc')->get();

        return view('homily.index', compact('homilies'));
    }

    public function destroy($id){
        $announcement = Homily::findOrFail($id);
        $announcement->delete();
        return redirect('/');
        }


}
