<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;
use App\Adoration;
use App\Adday;

class AdorationController extends Controller
{
        public function __construct()
    {
        // $this->middleware('auth')->only('edit', 'index', 'show', 'info', 'email', 'thursEmail', 'allergies', 'ride', 'rideEmail', 'comments', 'destroy', 'update', 'allergiesEmail', 'allergies');

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
        $addays=Adday::get();

        return view('adoration.index',compact('addays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adoration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addoration=new Adoration;
        $addoration->one=$request->one;
        $addoration->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adoration=Adoration::findOrFail($id);
        return view('adoration.edit', compact('adoration'));
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
        $addoration=Adoration::findOrFail($id);
        $addoration->name=$request->name;
        $addoration->num=$request->num;
        $addoration->save();
        return redirect('/adoration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
