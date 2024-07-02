<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ClientPostedJob;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class VacancyController extends Controller
{
    //

    public function Index()
    {
        return view('frontend.vacancy')
        ->with('category', Category::get());
    }

    public function Store(Request $request)
    {
        $valid = Validator::make($request->all(), [
                    'deadline' => 'date_format:Y-m-d',
                    'category_id' => 'integer'
        ]);
        if($valid->fails()){
            Session::flash('message', 'Date Format is wrong, please enter Y-m-d e.g 2024-12-05');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
        }
        $capt = captcha_check($request->captcha);
        if ($capt) {
            Session::flash('message', 'Captcha does not match, try again');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
        }
        $date = Carbon::createFromFormat('Y-m-d',$request->deadline);
        try {
            ClientPostedJob::create([
                'email' => $request->company_email,
                'company' => $request->company_name,
                'category_id' => $request->category_id,
                'title' => $request->title,
                'location' => $request->location,
                'salary_range' => $request->salary_range,
                'job_details' => $request->job_details,
                 'job_type' => $request->job_type, 
                 'deadline' => $date,
            ]);

            Session::flash('alert', 'success');
            Session::flash('message', 'Your Job is posted and is pending for approval');
            return back();
        } catch (\Exception $e) {
            Session::flash('alert', 'error');
            Session::flash('message', $e->getMessage());
            return back()->withInput($request->all());
        }
    }
}
