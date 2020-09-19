<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function menu()
    {
        return view('components.menu');
    }
    public function settings()
    {
        return view('components.settings');
    }
}
