<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Announcement;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;
use App\Volunteer;


class VolunteerController extends Controller
{

        public function __construct(){
        $this->middleware('auth')->only('index','edit');


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



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('last_name', 'asc')->get();
        return view('volunteer.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request,[
                'first_name' => 'required',
                'last_name' => 'required',
                'age' => 'required',
                'phone' => 'required',
                'email' => 'required',
                ]);



        $volunteer = new Volunteer;
        $volunteer->fill($request->all());
        $volunteer->save();
        return redirect('/volunteer/'.$volunteer->id.'/thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteer.show', compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteer.edit', compact('volunteer'));
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
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->fill($request->all());
        $volunteer->save();
        return redirect('/volunteer/'.$volunteer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return redirect('/volunteer');
    }

    public function thanks($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteer.thanks', compact('volunteer'));
    }
}
