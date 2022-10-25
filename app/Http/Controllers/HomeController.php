<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::id();
        $contact = DB::table('contacts')
        ->simplePaginate(1)
        ->get();
        $message = DB::table('messages')
        ->where ('user_id', '=', $user)
        ->get();
        $data=[
            'contacts' =>$contact,
            'message' =>$message
        ];
        return view('home')->with($data);
        // $user = Auth::id();
        // $message = DB::table('messages')
        // ->where ('user_id', '=', $user)
        // ->get();
        // return view('home')->with('message', $message);
    }
}
