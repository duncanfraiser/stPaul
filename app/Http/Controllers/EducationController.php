<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Education;

class EducationController extends Controller
{
	public function create(){
    	return view('education.create');
    }

    public function store(Request $request){
        $education = new Education;
		$education->fill($request->all());
		$education->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('education/'.$education->id);
    }

    public function show($id){
    	$education = Education::findOrFail($id);
		return view('education.show', compact('education'));
    }

    public function edit($id){
    	$education = Education::findOrFail($id);
    	return view('education.edit', compact('education'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$education = Education::findOrFail($id);
    	$education->fill($request->all());
    	$education->save();
    	return redirect('education/'.$id);

    }
}
