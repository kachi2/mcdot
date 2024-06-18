<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;


class ContactController extends Controller
{
    //

    public function Index(){
        return view('frontend.contact')
        ->with('services', Page::latest()->get());
    }
}
