<?php

namespace App\Http\Controllers;

use App\Models\ApplicantCV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CVController extends Controller
{
    //

    public function Index()
    {
        return view('frontend.cv');
    }

    public function SubmitCV(Request $request)
    {

      $capt = captcha_check($request->captcha);
      if(!$capt){
          Session::flash('message', 'Captcha does not match, try again');
          Session::flash('alert', 'danger');
          return back()->withInput($request->all());
      }
      $check = ApplicantCV::where(['email' => $request->email])->first();
      if(!$check){
       Session::flash('message', 'You have previously submitted your CV');
       Session::flash('alert', 'danger');
       return back()->withInput();
      }
    try{
    $appliedJob = new ApplicantCV();
    $appliedJob->name  = $request->name;
    $appliedJob->email = $request->email;
    $appliedJob->cover_letter = $request->cover_letter;
    $appliedJob->phone = $request->phone;
     $appliedJob->cv = StorePdf($request->cv);
    $appliedJob->save();
    Session::flash('alert', 'success');
    Session::flash('message', 'Your details is stored successfully');
    return back();
        }catch(\Exception $e)
        {
    Session::flash('alert', 'error');
    Session::flash('message', $e->getMessage());
    return back();

        }

    }
}
