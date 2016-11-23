<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\customerror;

use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;
use App\Flower;

class FlowerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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



    public function index()
    {
        $flowers = Flower::get();
        return view('flower.index', compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flower = Flower::findorfail($id);
        return view('flower.show', compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
       
        return view('flower.edit', compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function altar($id)
    {
        $flower = Flower::findOrFail($id);
       
        return view('flower.altar', compact('flower'));
    }





    public function blessedmother($id)
    {
        $flower = Flower::findOrFail($id);
       
        return view('flower.blessedmother', compact('flower'));
    }







    public function update(Request $request, $id)
    {
       if($request['errorswitch'] == 'altar'){
            $this->validate($request,[
                'altar_donor' => 'required',
                'altar_flower_honor_memory' => 'required',
                'altar_honor' => 'required',

                ]);

       }
       
       if($request['errorswitch'] == 'mother'){
            $this->validate($request,[
                'blessed_mother_donor' => 'required',
                'blessed_mother_flower_honor_memory' => 'required',
                'mother_honor' => 'required',
                ]);
       }

       

        $flower = Flower::findOrFail($id);
        $flower->fill($request->all());
        $flower->save();
        return redirect('flower/'.$id.'/thanks');
    }



    public function thanks($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flower.thanks', compact('flower'));
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
