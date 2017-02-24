<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Banner;
use App\Announcement;
use App\Masstime;
use App\Bulletin;
use App\Homily;
use App\Youth;
use App\Ministry;
use App\Prayer;
use App\Suggested_Prayer;
use App\Divina;
use App\Contemplative;
use App\Reflection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $banners = Banner::get();
        $announcement = Announcement::latest()->first();
        $masstime = Masstime::latest()->first();
        $bulletin = Bulletin::latest()->first();
        $homily = Homily::latest()->first();
        $youth = Youth::latest()->first();
        $ministry = Ministry::latest()->first();
        $reflection = Reflection::latest()->first();


        return view('home.index', compact('announcement', 'masstime', 'bulletin', 'homily', 'youth', 'ministry', 'reflection'));
    }
}
