<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; 
use App\Education;
use App\Student;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class EducationController extends Controller
{

    public function __construct(){
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
    	return view('education.create');
    }

    public function store(Request $request){

            $this->validate($request,[
                'address' => 'required'
                ]);



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
    	return redirect('education/');
    }

    public function index(){
        $eds = Education::orderBy('father_last_name', 'asc')->get();
        return view('education.index', compact('eds'));
    }

        public function grade(){

        $students = Student::orderBy('grade', 'asc')->get();
        return view('education.grade', compact('students'));
    }

    public function destroy($id){
        $education = Education::findOrFail($id);
        $education->delete();
        return redirect('/education');
    }

}
