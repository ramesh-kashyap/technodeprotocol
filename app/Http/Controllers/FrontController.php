<?php

namespace App\Http\Controllers;
use App\Models\GeneralSetting;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
{
    $settings = GeneralSetting::select('days_online', 'users', 'total_deposit', 'total_withdraw')->first();

    return view('main.home', compact('settings'));
}

    public function about()
    {
        return view('main.about');
    }

    public function services()
    {
        return view('main.services');
    }

    public function contact()
    {
        return view('main.contact');
    }
    public function faq()
    {
        return view('main.faq');
    }
   
    public function tutorial()
    {
        return view('main.tutorial');
    }

    public function team()
    {
        return view('main.team');
    }
    public function termcandition()
    {
        return view('main.term-candition');
    }

    public function news()
    {
        return view('main.news');
    }



}
