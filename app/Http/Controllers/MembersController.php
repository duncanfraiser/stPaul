<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Member;

class MembersController extends Controller
{


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

		return redirect('member/'.$id);
    }





}
