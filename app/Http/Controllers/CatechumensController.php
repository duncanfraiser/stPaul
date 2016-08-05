<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Catechumen;

class CatechumensController extends Controller
{
	public function create(){
    	return view('catechumen.create');
    }

    public function store(Request $request){
            

            $this->validate($request,[
                'firstName' => 'required',
                'lastName' => 'required',
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

}
