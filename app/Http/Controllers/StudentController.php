<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\Education;

class StudentController extends Controller
{
    public function __construct(){
        //$this->middleware('auth')->only('create','edit');
        }

    public function create(){
        return view('student.create');
        }

    public function store(Request $request){

        $student = new Student;
		$student->fill($request->all());
		$student->save();
		return redirect('/education/'.$student->education_id.'/student/'.$student->id);
        }

    public function show($parent_id, $student_id){
    	$student = Student::findOrFail($student_id);        
    	$parent = Education::findOrFail($parent_id);        
		return view('student.show', compact('student', 'parent'));
        }

    public function edit($parent_id, $student_id){
    	$student = Student::findOrFail($student_id);
    	return view('student.edit', compact('student'));
        }

    public function update($id, Request $request){
		$input = $request->all();
    	$student = Student::findOrFail($id);
    	$student->fill($request->all());
    	$student->save();
    	return redirect('/');
        }

    public function index(){
        $students = Student::get();
        return view('student.index', compact('students'));
        }

    public function destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/');
        }
}
