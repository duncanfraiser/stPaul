<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Member;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class MembersController extends Controller
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

	public function show($id){

		$member = Member::findOrFail($id);
		return view('member/show', compact('member', 'id'));
	}


	public function index(){
        $members=Member::orderBy('familyName','asc')->get();
		return view('member.index',compact('members'));

	}

    public function info($id){
        $member=Member::findOrFail($id);

        return view('member.info',compact('member'));
        
    }

    public function create(){






    	return view('member.create');
    }

    public function store(Request $request){

            $this->validate($request,[
                'familyName' => 'required',
                'todaysDate' => 'required',
                'prevParish' => 'required',
                'fNameOne' => 'required',
                'lNameOne' => 'required',
                'perferedNameOne' => 'required',
                'dobOne' => 'required',
                'maritalStat' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required',
                'homePhone' => 'required',
                'cellPhoneOne' => 'required',
                'emailOne' => 'required',
                'careerOne' => 'required',
                'workPhoneOne' => 'required',
                'employmentOne' => 'required',
                'contact' => 'required',
                'stewardship' => 'required',
                // 'active' => 'required',
                // 'fNameTwo' => 'required',
                // 'perferedNameTwo' => 'required',
                // 'dobTwo' => 'required',
                // 'cellPhoneTwo' => 'required',
                // 'emailTwo' => 'required',
                // 'careerTwo' => 'required',
                // 'workPhoneTwo' => 'required',
                // 'employmentTwo' => 'required',

                ]);


        $member = new Member;
     
		$member->fill($request->all());
		$member->save();
		$id = $member->id;
 \Session::flash('success_message', 'Successfully saved!');

		return redirect('member/'.$id.'/thanks');
    }

    public function thanks($member){
        $member = Member::findOrFail($member);
  

        return view('member.thanks', compact('member'));
    }




}
