<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;
use App\Staff;

class StaffController extends Controller
{

public function __construct(){
        $this->middleware('staff')->only('create','edit');
        // $heading = Announcement::latest()->first();
        // \View::share('heading', $heading);

        $prayer = Prayer::latest()->first();                
        \View::share('prayer', $prayer);

        $suggestedprayer = Suggested_Prayer::latest()->first();                
        \View::share('suggestedprayer', $suggestedprayer);

        $divina = Divina::latest()->first();
        \View::share('divina', $divina);

        $contemplative = Contemplative::latest()->first();                
        \View::share('contemplative', $contemplative);
    





    }







    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::get();
        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new Staff;
        $input = $request->all();

        if($request->hasFile('image')){
            $fileData = $request->file('image');
            $filepath = 'img/';
            $filename = $fileData->getClientOriginalName();
            $fileData->move($filepath, $filename);
            $staff->img_path = $filepath.$filename;
        }

        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->body = $request->body;
        $staff->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::findorfail($id);

        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findorfail($id);
        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staff = Staff::findorfail($id);
        $input = $request->all();

        if($request->hasFile('image')){
            $fileData = $request->file('image');
            $filepath = 'img/';
            $filename = $fileData->getClientOriginalName();
            $fileData->move($filepath, $filename);
            $staff->img_path = $filepath.$filename;
        }

        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->body = $request->body;
        $staff->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findorfail($id);
        $staff->delete();
        return redirect('/');

    }
}
