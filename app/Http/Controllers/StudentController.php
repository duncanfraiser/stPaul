<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\Education;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('edit', 'grade');

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
        return view('student.create');
        }

    public function store(Request $request){

            $this->validate($request,[
                'firstName' => 'required',
                'lastName' => 'required',
                ]);



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

    public function update($familyId, $studentId, Request $request){
         
		$input = $request->all();
    	$student = Student::findOrFail($studentId);
    	$student->fill($request->all());
    	$student->save();
    	return redirect('/education/');
        }

    public function index(){
        $students = Student::get();
        return view('student.index', compact('students'));
        }

    public function destroy($id, $studentId){
   
        $student = Student::findOrFail($studentId);
        $student->delete();
        return redirect('/education');
        }

    public function grade(){
        $students = Student::get();
        return view('student.grade', compact('students'));
    }

}
