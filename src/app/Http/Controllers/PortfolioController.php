<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function project()
    {
        return view('project');
    }

    public function contact()
    {
        return view('contact');
    }
}
