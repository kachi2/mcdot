<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //


    public function PermanentRecruiting()
    {
        return view('frontend.permanent_staff');
    }
}
