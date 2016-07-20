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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   // public function __construct()
    //{
    //    $this->middleware('auth');
   // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();
        $announcement = Announcement::latest()->first();
        $masstime = Masstime::latest()->first();
        $bulletin = Bulletin::latest()->first();
        $homily = Homily::latest()->first();
        $youth = Youth::latest()->first();


        return view('home.index', compact('banners', 'announcement', 'masstime', 'bulletin', 'homily', 'youth'));
    }
}
