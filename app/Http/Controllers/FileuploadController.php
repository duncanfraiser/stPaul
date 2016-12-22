<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Fileupload;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;


class FileuploadController extends Controller
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


    public function index(){
        $fileuploads = Fileupload::get();
        $list = array();
        foreach ($fileuploads as $fileupload){
            $img = new \StdClass;
            $img->url  = "http://saintpaulcatholicchurch.com/" . $fileupload->path;
            $img->thumb = "http://saintpaulcatholicchurch.com/" . $fileupload->path;
            $img->id = $fileupload->id;
            $list[] = $img;
            }
        return stripslashes(response()->json($list)->content());
        }    
  //   public function create(){
  //   	return view('fileupload.create');
  //   }

    public function store(Request $request){
        if($request->hasFile('image')){
            $fileData = $request->file('image');
            $filepath = 'img/';
        }
        if($request->hasFile('file')){
            $fileData = $request->file('file');
            $filepath = 'files/';
        }
        $file = new Fileupload;
     	$input = $request->all();
     	$filename = $fileData->getClientOriginalName();
        $file->title = $filename;
        $file->path = $filepath.$filename;
        $fileData->move($filepath, $filename); 
        $completePath = "http://saintpaulcatholicchurch.com/".$filepath.$filename;
        $file->save();  
        return stripslashes(response()->json(['link' => $completePath])->content());
    }

}
