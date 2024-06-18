<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function __invoke()
    {
        return view('frontend.about')
        ->with('about', AboutUs::latest()->first());
    }
}
