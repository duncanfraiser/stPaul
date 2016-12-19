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

		$member = Member::findOrFail(1);

	}



    public function create(){
    	return view('member.create');
    }

    public function store(Request $request){
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
