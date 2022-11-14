<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FeatureController extends Controller
{   

    public function index(){
        return view('home');
    }

    public function tam(){
        return view('feature.toolsAndMachine');
    }

    public function upload(){
        return view('feature.upload');
    }

    public function expoint(){
        return view('feature.exchangePoint');
    }

    public function contact(){
        return view('feature.contactus');
    }

    public function myprofile()
    {
        $user=User::all();
        return view ('feature.myprofile', compact('user'));
    }
}
