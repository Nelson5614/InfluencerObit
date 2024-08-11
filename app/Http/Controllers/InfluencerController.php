<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    public function index()
    {
        return view('influencer.dashboard');
    }

    public function contact(){
        return view('influencer.contact');
    }
}
