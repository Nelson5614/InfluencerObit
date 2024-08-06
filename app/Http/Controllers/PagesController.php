<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');

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
}
