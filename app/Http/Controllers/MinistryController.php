<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ministry;

class MinistryController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create','edit');
        $heading = Ministry::latest()->first();
        \View::share('heading', $heading);
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



		return view('ministry.show', compact('ministry'));

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
        $ministries = Ministry::get();
        return view('ministry.index', compact('ministries'));
        }

    public function destroy($id){
        $ministry = Ministry::findOrFail($id);
        $ministry->delete();
        return redirect('/');
        }
}


