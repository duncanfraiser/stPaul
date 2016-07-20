<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Fileupload;

class FileuploadController extends Controller
{
    public function create(){
    	return view('fileupload.create');
    }

    public function store(Request $request){

    	$input = $request->all();
    	$file = new Fileupload;
    	$fileData = $request->file('upload');
    	$filename = $fileData->getClientOriginalName();
    	$filepath = 'files/';
    	$file = new Fileupload;
		$file->fill($request->all());
		$file->save();
 	


  

    	

 



 


	
	

		$request->file('upload')->move($filepath, $filename);


 		\Session::flash('success_message', 'Successfully saved!');

		return redirect('files/'.$file->id);
   




    }

}
