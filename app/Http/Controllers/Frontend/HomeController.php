<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('Frontend.home.index',compact('images'));
    }
}
