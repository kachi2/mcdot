<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Category;
use App\Models\ClientJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\Facades\Hashids;

class JobsController extends Controller
{

    public function Details($job_id){
        $id = HashIds::connection('jobs')->decode($job_id)[0];
        $jobs = ClientJob::latest()->get();
        $categ = Category::latest()->get();
        $job = ClientJob::whereId($id)->first();
        HashIds($categ); 
        HashIds($jobs);
        HashIds($job);
       return view('frontend.jobs_details')
       ->with('job', $job)
       ->with('jobs', $jobs)
       ->with('categories', $categ);
    }

    public function Category($category_id){
      $jobs = ClientJob::where('category_id', decryptId($category_id))->get();
      $category = Category::orderBy('name', 'DESC')->get();
      HashIds($category);
      HashIds($jobs);
      return view('frontend.jobs')
      ->with('jobs', $jobs)
      ->with('category', $category);
    }


    public function ApplyJob(Request $request, $job_id){
        $job = ClientJob::where('id', decryptId($job_id))->first();
        $valid = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'cv' => 'required'
      ]);
      $capt = captcha_check($request->captcha);
      if($valid->fails()){
        Session::flash('alert', 'error');
        Session::flash('message', $valid->errors()->first());
        return back()->withInput($request->all());
      }
    //   if(!$capt){
    //       Session::flash('message', 'Captcha does not match, try again');
    //       Session::flash('alert', 'danger');
    //       return back()->withInput($request->all());
    //   }
      $check = AppliedJob::where(['email' => $request->email, 'client_jobs_id' => $job->id])->first();
      if($check){
       Session::flash('message', 'You have previously applied for this job, our team will contact you as soon');
       Session::flash('alert', 'danger');
       return back()->withInput();
      }
    $appliedJob = new AppliedJob;
    $appliedJob->client_jobs_id =  $job->id; 
    $appliedJob->name  = $request->name;
    $appliedJob->email = $request->email;
    $appliedJob->cover_letter = $request->cover_letter;
    $appliedJob->phone = $request->phone;
    $appliedJob->cv = StorePdf($request->cv);
    $appliedJob->save();
    Session::flash('alert', 'success');
    Session::flash('message', 'Job Applied Successfully');
    return back();
    }

}
