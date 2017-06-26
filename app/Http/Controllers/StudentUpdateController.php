<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;
use App\studentUpdate;


class StudentUpdateController extends Controller
{
    
    public function __construct()
    {
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
        $updates=StudentUpdate::orderBy('created_at', 'asc')->get();
        return view('studentUpdate.index', compact('updates'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentUpdate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentUpdate = new StudentUpdate;
        $studentUpdate->fill($request->all());
        $studentUpdate->save();

        return redirect('/studentUpdate/'.$studentUpdate->id.'/thanks');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentUpdate = StudentUpdate::findOrFail($id);
        $studentUpdate->delete();
        return redirect('/studentUpdate');
    }


    public function thanks($id)
    {
        $studentUpdate=StudentUpdate::findOrFail($id);
        return view('studentUpdate.thanks', compact('studentUpdate'));
    }


}
