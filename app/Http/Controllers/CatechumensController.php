<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Catechumen;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;

class CatechumensController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('edit', 'index', 'baptized', 'annulment');

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
    	return view('catechumen.create');
    }

    public function store(Request $request){
            

            $this->validate($request,[
                'firstName' => 'required',
                'lastName' => 'required',
                'baptized' => 'required',
                ]);



        $catechumen = new Catechumen;
		$catechumen->fill($request->all());
		$catechumen->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('RCIA/'.$catechumen->id.'/thanks');
    }

    public function show($id){


    	$rcia = Catechumen::findOrFail($id);
   
		return view('catechumen.show', compact('rcia'));
    }

    public function edit($id){
    	$rcia = Catechumen::findOrFail($id);
    	return view('catechumen.edit', compact('rcia'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$catechumen = Catechumen::findOrFail($id);
    	$catechumen->fill($request->all());
    	$catechumen->save();
    	return redirect('RCIA/');

    }

    public function thanks($id){
        $catechumen = Catechumen::findOrFail($id);
        return view('catechumen.thanks', compact('catechumen'));
    }

    public function index(){
        $rcias = Catechumen::orderBy('lastName', 'asc')->get();
        return view('catechumen.index', compact('rcias'));        
    }

    public function destroy($id){
        $rcias = Catechumen::findOrFail($id);
        $rcias->delete();
        return redirect('/RCIA');
    }

    public function baptized(){
        $yesBaps = Catechumen::where('baptized','Yes')->get();
        $noBaps = Catechumen::where('baptized','No')->get();
        return view('catechumen.baptized', compact('yesBaps', 'noBaps'));
    }

    public function annulment(){
        $grantAnnuls = Catechumen::where('annulment_granted','Yes')->get();
        $pendAnnuls = Catechumen::where('annulment_pending','Yes')->get();
        return view('catechumen.annulment', compact('grantAnnuls', 'pendAnnuls'));
    }
}

