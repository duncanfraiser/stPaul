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
use App\About;

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
                'father_first_name' => 'required',
                'father_last_name' => 'required',
                'address' => 'required',
                'father_dob' => 'required',
                'mother_first_name' => 'required',
                'mother_last_name' => 'required',
                'mother_dob' => 'required',
                'marital_status' => 'required',
                'reside_with' => 'required',
                'phone' => 'required',
                'father_work' => 'required',
                'father_cell' => 'required',
                'father_email' => 'required',
                'mother_work' => 'required',
                'mother_cell' => 'required',
                'mother_email' => 'required',
                'contact_one_name' => 'required',
                'contact_one_relation' => 'required',
                'contact_one_phone' => 'required',
                'contact_two_name' => 'required',
                'contact_two_relation' => 'required',
                'contact_two_phone' => 'required',                
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
      
        $changes = Education::where('updated_at', '>=', Carbon::now()->subDays(7))->orderBy('updated_at', 'desc')->get();
        $students = Student::where('updated_at', '>=', Carbon::now()->subDays(7))->orderBy('updated_at', 'desc')->get();
        
            return view('education.changes', compact('changes', 'students'));
    }

    public function menu(){
        return view('education.menu');
    }

    public function addNew(){
        $fams=Education::orderBy('father_last_name')->get();
        $total=Education::count();
        $colTot=$total/2;

        return view('education.addNew', compact('fams', 'colTot'));
    }

    public function about(){
        $about=About::findOrFail(1);
        return view('education.about', compact('about'));
    }

    public function newfam(){
        $newfams=Education::where('created_at', '>', '2017-01-01 00:00:00')->get();     
        $newstudents=Student::where('created_at', '>', '2017-01-01 00:00:00')->get();
        $updatedstudents=Student::where('created_at', '<', '2017-01-01 00:00:00')->where('updated_at', '>', '2017-01-01 00:00:00')->get();
        $updatedfams=Education::where('created_at', '<', '2017-01-01 00:00:00')->where('updated_at', '>', '2017-01-01 00:00:00')->get();
        
        return view('education.newfam', compact('newfams','newstudents','updatedstudents', 'updatedfams'));
    }

}
