<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Announcement;

class AnnouncementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');
    }

    public function create(){
    return view('announcement.create');

    }

    public function store(Request $request){
        $announcement = new Announcement;
		$announcement->fill($request->all());
		$announcement->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('announcement/'.$announcement->id);
    }

    public function show($id){
    	$announcement = Announcement::findOrFail($id);
        
		return view('announcement.show', compact('announcement'));
    }

    public function edit($id){
    	$announcement = Announcement::findOrFail($id);
    	return view('announcement.edit', compact('announcement'));
    }

    public function update($id, Request $request){
		$input = $request->all();
    	$announcement = Announcement::findOrFail($id);
    	$announcement->fill($request->all());
    	$announcement->save();
    	return redirect('announcement/'.$id);

    }

    public function index(){

        $announcements = Announcement::get();

        return view('announcement.index', compact('announcements'));
    }

}
