<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactUs;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //

    public function Index(){
        return view('frontend.contact')
        ->with('services', Page::latest()->get());
    }

    public function Contact(Request $request){

        $settings = Setting::first();
       $valid = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'captcha' => 'required',
            
        ]);
        if($valid->fails()){
            Session::flash('message', 'Some required fields are missing value');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
        }
        $capt = captcha_check($request->captcha);
        if(!$capt){
            Session::flash('message', 'Captcha does not match, try again');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
           
        }
        $data = [
            'name' =>  $request->name,
            'phone' => $request->phone,
            'email' =>  $request->email,
            'message' => $request->message,
            'service' => $request->service
        ];
        Session::flash('message', 'Request sent Successfully');
        Session::flash('alert', 'success');
        Mail::to($settings->site_email)->send(new ContactUs($data));

     dd($data);
        return back();
    }
}
