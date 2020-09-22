<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class PagesController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        return Agent::isDesktop() ?   view('pages.home.desktop.index') :  view('pages.home.mobile.index');

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

    public function pricing()
    {
        return view('pages.pricing.index');
    }
}
