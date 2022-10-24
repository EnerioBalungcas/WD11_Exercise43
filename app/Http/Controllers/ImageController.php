<?php

namespace App\Http\Controllers;
use App\Models\Images;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create(){
        return view('image.index');
    }
    public function store(Request $request){
        $data = new Images();
        if($request->file('Images')){
            $file = $request->file('Images');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/Image'), $filename);
            $data ['Images'] =$filename;
        }
        $data->save();
        return redirect()->route('image.show');
    }
    public function show(){
        $imageData = Images::all();
        return view('image.view_image')->with('imageData', $imageData);
    }

}
//php artisan make:controller ImageController