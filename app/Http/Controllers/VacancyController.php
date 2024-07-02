<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ClientPostedJob;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $capt = captcha_check($request->captcha);
        if (!$capt) {
            Session::flash('message', 'Captcha does not match, try again');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
        }
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
                 'deadline' => Carbon::createFromFormat('d-m-y',$request->deadline),
            ]);

            Session::flash('alert', 'success');
            Session::flash('message', 'Your Job is posted and is pending for approval');
            return back();
        } catch (\Exception $e) {
            Session::flash('alert', 'error');
            Session::flash('message', $e->getMessage());
            return back();
        }
    }
}
