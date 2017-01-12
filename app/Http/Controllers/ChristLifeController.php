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
        $this->middleware('auth')->only('edit', 'index', 'show', 'info', 'email', 'thursEmail', 'allergies', 'ride', 'rideEmail', 'comments', 'destroy', 'update', 'allergiesEmail', 'allergies');

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
                'firstName' => 'required',
                'lastName' => 'required',
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

        // $tuesdays = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->get();
        // $thursdays = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->get();
        $christlife = ChristLife::orderBy('lastName', 'asc')->get();
        return view('christlife.index', compact('christlife'));

    }
    
    // public function info(){
    //     // $tuesdays = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->get();
    //     // $thursdays = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->get();
    //     return view('christlife.index', compact('tuesdays', 'thursdays'));

    // }

    public function email(){      
        $christlife = ChristLife::orderBy('lastName', 'asc')->lists('email');
        $emails = $christlife->unique();
        // $tuesEmail = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->lists('email');
        // $tuEmails = $tuesEmail->unique();
        // $thursEmail = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->lists('email');
        // $trEmails = $thursEmail->unique();
        return view('christlife.email', compact('emails'));
    }

    public function thursEmail(){      
        $christlife = ChristLife::orderBy('lastName', 'asc')->lists('email');
        $email = $thursEmail->unique();
        return view('christlife.thursEmail', compact('email'));
    }

    public function allergies(){ 
          $allergies = ChristLife::orderBy('lastName', 'asc')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->get();
          


        // $tuesAllergies = ChristLife::orderBy('lastName', 'asc')->where('day','Tuesday')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->get();
        // $thursAllergies = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->get();
        return view('christlife.allergies', compact('allergies'));
    }

    public function allergiesEmail(){
        $allergies = ChristLife::orderBy('lastName', 'asc')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->lists('email');
        $emails = $allergies->unique();
        // $thursAllergies = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('allergies', '!=', '')->where('allergies', '!=', 'none')->where('allergies', '!=', 'n/a')->where('allergies', '!=', 'na')->lists('email');
        // $trEmails = $thursAllergies->unique();
        return view('christlife.allergiesEmail', compact('emails'));
    }

    public function childCare(){
        $childCares = ChristLife::orderBy('lastName', 'asc')->where('childcare','Yes')->get();
        // $trChildCares = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('childcare','Yes')->get();

        return view('christlife.childCare', compact('childCares'));
    }
    public function childCareEmail(){
        $childCares = ChristLife::orderBy('lastName', 'asc')->where('childcare','Yes')->lists('email');
        // $trChildCares = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('childcare','Yes')->lists('email');

        return view('christlife.childCareEmail', compact('childCares'));
    }

    public function ride(){      
        $needs = ChristLife::orderBy('lastName', 'asc')->where('ride','Yes')->get();
        $gives = ChristLife::orderBy('lastName', 'asc')->where('provideride','Yes')->get();
        // $trNeeds = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('ride','Yes')->get();
        // $trGives = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('provideride','Yes')->get();
        return view('christlife.ride', compact('needs', 'gives'));
    }
    public function rideEmail(){
        $needs = ChristLife::orderBy('lastName', 'asc')->where('ride','Yes')->lists('email');
        $gives = ChristLife::orderBy('lastName', 'asc')->where('provideride','Yes')->lists('email');
        // $trNeeds = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('ride','Yes')->lists('email');
        // $trGives = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('provideride','Yes')->lists('email');
        return view('christlife.rideEmail', compact('needs', 'gives'));
    }




    public function comments(){      
        $comments = ChristLife::orderBy('lastName', 'asc')->where('comments','!=','')->get();
        // $trComments = ChristLife::orderBy('lastName', 'asc')->where('day','Thursday')->where('comments','!=','')->get();    
        return view('christlife.comments', compact('comments'));
    }




}
