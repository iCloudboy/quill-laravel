<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Design;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = Design::all();

        return view ('home', compact('designs'));
    }
}
