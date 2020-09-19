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
        return view('menus.list');
    }

    public function settings()
    {
        return view('menus.settings');
    }

    public function starter()
    {
        return view('plans.starter');
    }

    public function premium()
    {
        return view('plans.premium');
    }

    public function vip()
    {
        return view('plans.vip');
    }

    public function basic()
    {
        return view('plans.basic');
    }
}
