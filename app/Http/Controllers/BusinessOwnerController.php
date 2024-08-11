<?php

namespace App\Http\Controllers;

use App\Models\Influencer;
use Illuminate\Http\Request;

class BusinessOwnerController extends Controller
{
    public function index()
    {
        return view('businessowner.dashboard');
    }

     public function influencerprofile($id){
        $influencer = Influencer::findOrFail($id);
         return view(' businessowner.influencerprofile', compact('influencer'));
     }
}
