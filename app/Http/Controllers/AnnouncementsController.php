<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Announcement;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class AnnouncementsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create','edit');
        $heading = Announcement::latest()->first();
        \View::share('heading', $heading);

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
        return view('announcement.create');
        }

    public function store(Request $request){
        $announcement = new Announcement;
		$announcement->fill($request->all());
		$announcement->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/');
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
    	return redirect('/');
        }

    public function index(){
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('announcement.index', compact('announcements'));
        }

    public function destroy($id){
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();
        return redirect('/');
        }

}
