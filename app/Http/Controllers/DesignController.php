<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Design;
class DesignController extends Controller
{
    public function index()
    {
        $designs = Design::all();

        return view ('layouts.home', compact('designs'));
    }

    public function detail(Design $design)
    {
        return view('designs.details', compact('design'));
    }
}
