<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ChristLife;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;

class ChristLifeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit', 'index', 'show');

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

        public function destroy($id){
        $christlife = ChristLife::findOrFail($id);
        $christlife->delete();
        return redirect('/ChristLife');
        }




    public function index(){

        $tuesdays = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->get();
        $thursdays = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->get();
        return view('christlife.index', compact('tuesdays', 'thursdays'));

    }
    
    public function info(){
        $tuesdays = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->get();
        $thursdays = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->get();
        return view('christlife.index', compact('tuesdays', 'thursdays'));

    }

    public function email(){      
        $tuesEmail = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->lists('email');
        $tuEmails = $tuesEmail->unique();
        $thursEmail = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->lists('email');
        $trEmails = $thursEmail->unique();
        return view('christlife.email', compact('tuEmails', 'trEmails'));
    }

    public function thursEmail(){      
        $thursEmail = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->lists('email');
        $tEmail = $thursEmail->unique();
        return view('christlife.thursEmail', compact('tEmail'));
    }

    public function allergies(){ 
        $tuesAllergies = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->get();
        $thursAllergies = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->get();
        return view('christlife.allergies', compact('tuesAllergies', 'thursAllergies'));
    }

    public function allergiesEmail(){
        $tuesAllergies = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->lists('email');
        $tuEmails = $tuesAllergies->unique();
        $thursAllergies = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->lists('email');
        $trEmails = $thursAllergies->unique();
        return view('christlife.allergiesEmail', compact('tuEmails', 'trEmails'));
    }

    public function ride(){      
        $tuNeeds = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('ride','Yes')->get();
        $tuGives = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('provideride','Yes')->get();
        $trNeeds = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('ride','Yes')->get();
        $trGives = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('provideride','Yes')->get();
        return view('christlife.ride', compact('tuNeeds', 'tuGives', 'trNeeds', 'trGives'));
    }
    public function rideEmail(){
        $tuNeeds = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('ride','Yes')->lists('email');
        $tuGives = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('provideride','Yes')->lists('email');
        $trNeeds = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('ride','Yes')->lists('email');
        $trGives = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('provideride','Yes')->lists('email');
        return view('christlife.rideEmail', compact('tuNeeds', 'tuGives', 'trNeeds', 'trGives'));
    }
    public function comments(){      
        $tuComments = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('comments','!=','')->get();
        $trComments = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('comments','!=','')->get();    
        return view('christlife.comments', compact('tuComments', 'trComments'));
    }




}
