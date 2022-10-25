<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function showHome(){
        return view('app/Http/Controllers/WebsiteController@home');
    }
    function showBooking(){
        return view('app/Http/Controllers/WebsiteController@booking');
    }
    function showService(){
        return view('app/Http/Controllers/WebsiteController@service');
    }
    function showAbout(){
        return view('app/Http/Controllers/WebsiteController@about');
    }
    function showDriver(){
        return view('app/Http/Controllers/WebsiteController@driver');
    }
}
