<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class AdminController extends Controller
{
    public function admin()
    {
        $images = Image::all();
        return view('Backend.home.index',compact('images'));
    }
    public function slider(Request $request)
    {
        $image = $request->file('slider');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('slider'), $imageName);

        // Store image data in the database
        $imageData = new Image();
        $imageData->slider = $imageName;
        $imageData->save();

        return back()->with('success','Image uploaded successfully.');
    }

    public function sliderview()
    {
        $images = Image::all();
        return view('backend.home.index', compact('images'));
    }

    

}
