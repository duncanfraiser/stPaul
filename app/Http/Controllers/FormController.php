<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form;

class FormController extends Controller
{
	public function index(){
		$forms = Form::all();

    	return view('form.index', compact('forms'));
    }
}
