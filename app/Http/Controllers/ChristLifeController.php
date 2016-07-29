<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ChristLife;

class ChristLifeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit', 'index', 'show');
    }

	public function create(){
        $counttuesdays = ChristLife::where('day','Tuesday')->count();

        $countthursdays = ChristLife::where('day','Thursday')->count();
 
    	return view('christlife.create', compact('counttuesdays', 'countthursdays'));
    }

    public function store(Request $request){

                $this->validate($request,[
                'completed' => 'required',
                'firstName' => 'required',
                'lastName' => 'required',
                'completed' => 'required',
                'day' => 'required',
                'age' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'street' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required'
                ]);



        $christlife = new ChristLife;
		$christlife->fill($request->all());
		$christlife->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('ChristLife/'.$christlife->id.'/thanks');
    }

    public function show($id){

    	$christlife = ChristLife::findOrFail($id);
		return view('christlife.show', compact('christlife'));
    }

        public function thanks($id){
      
        $christlife = ChristLife::findOrFail($id);
        return view('christlife.thanks', compact('christlife'));
    }


    public function edit($id){
    	$christlife = ChristLife::findOrFail($id);
    	return view('christlife.edit', compact('christlife'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$christlife = ChristLife::findOrFail($id);
    	$christlife->fill($request->all());
    	$christlife->save();
    	return redirect('ChristLife/'.$id);

    }

    public function index(){
        $tuesdays = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->get();
        $thursdays = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->get();
        return view('christlife.index', compact('tuesdays', 'thursdays'));

    }
}
