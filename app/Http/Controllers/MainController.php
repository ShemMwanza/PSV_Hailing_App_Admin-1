<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('adminViews.dashboard');
    }

    public function drivers()
    {
        return view('adminViews.drivers');
    }

    public function landing()
    {
        return view('adminViews.landing');
    }
}