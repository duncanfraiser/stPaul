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
use Carbon\Carbon;


class EducationController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('edit', 'index', 'family', 'grade', 'student', 'familyEmail', 'studentEmail');

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

        $students = Student::orderBy('lastName', 'asc')->get();

        return view('education.grade', compact('students'));
    }

    public function destroy($id){
        $education = Education::findOrFail($id);
        $education->delete();
        return redirect('/education');
    }

    public function family($id){
        $education = Education::findOrFail($id);
        return view('education.family', compact('education'));
    }

    public function student($family, $student){
        $student = Student::findOrFail($student);

        return view('education.student', compact('student'));
    }

    public function familyEmail(){
        $fatherEmails = Education::where('father_email','!=','')->where('father_email','!=','none')->where('father_email','!=','n/a')->lists('father_email');
        $motherEmails = Education::where('mother_email','!=','')->where('mother_email','!=','none')->where('mother_email','!=','n/a')->lists('mother_email');

        return view('education.familyEmail', compact('fatherEmails', 'motherEmails'));
    }

    public function studentEmail(){
        $emails = Student::where('email','!=','')->where('email','!=','none')->where('email','!=','n/a')->lists('email');
        return view('education.studentEmail', compact('emails'));
    }

        public function changes(){
      
        $changes = Education::where('updated_at', '>=', Carbon::now()->subDays(30))->orderBy('updated_at', 'desc')->get();
        $students = Student::where('updated_at', '>=', Carbon::now()->subDays(30))->orderBy('updated_at', 'desc')->get();
        
            return view('education.changes', compact('changes', 'students'));
    }




}
