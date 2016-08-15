<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create','edit');

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
        return view('contact.create');
        }

    public function store(Request $request){
        $contact = new Contact;
		$contact->fill($request->all());
		$contact->save();
 		\Session::flash('success_message', 'Successfully saved!');
		return redirect('/');
        }

    public function show($id){
    	$contact = Contact::findOrFail($id);    
        dd($contact);    
		return view('contact.show', compact('contact'));
        }

    public function edit($id){
    	$contact = Contact::findOrFail($id);
    	return view('contact.edit', compact('contact'));
        }

    public function update($id, Request $request){
		$input = $request->all();
    	$contact = Contact::findOrFail($id);
    	$contact->fill($request->all());
    	$contact->save();
    	return redirect('/');
        }

    public function index(){
        $contacts = Contact::get();
        return view('contact.index', compact('contacts'));
        }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/');
        }
}
