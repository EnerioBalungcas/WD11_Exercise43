<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //create a method here. Note: methods are functions inside an object
    public function goToPage(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function profile(){
        return view('pages.profile');
    }
}
