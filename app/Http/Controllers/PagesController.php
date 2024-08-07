<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');

    }
    public function register(){
        return view('signup');

    }
    public function registerasbusiness(){
        return view('registerasbusiness');

    }
    public function registerascreator(){
        return view('registerascreator');

    }
    public function dashboard(){
        return view('business.dashboard');

    }
    public function blog(){
        return view('blog');

    }

    public function findinfluencer(){
        return view('findinfluencer');
    }
    public function analyzeinfluencer(){
        return view('analyzeinfluencer');
    }

    public function influencerprofile(){
        return view('influencerprofile');
    }
}
