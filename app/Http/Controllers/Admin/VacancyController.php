<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ClientJob;
use App\Models\ClientPostedJob;
use Illuminate\Support\Facades\Session;

class VacancyController extends Controller
{
    //

    public function Index()
    {
        return view('admin.clientjobs.index')
        ->with('jobs', ClientPostedJob::latest()->get())
        ->with('bheading', 'Client Jobs')
        ->with('breadcrumb', 'Client Jobs');
    }

    public function Edit($job_id)
    {
        $jobs = ClientPostedJob::where('id', decrypt($job_id))->first();
        $category = Category::where('id', $jobs->category_id)->first();
        return view('admin.clientjobs.post')
        ->with('job',  $jobs)
        ->with('category', $category)
        ->with('bheading', 'Client Jobs')
        ->with('breadcrumb', 'Client Jobs');

    }

    public function store(Request $request, $job_id)
    {
         $data = [
            'title' => $request->title,
            'job_details' => $request->contents,
            'company' => $request->company_name,
            'category_id' => $request->category_id,
            'location_id' => $request->location,
            'deadline' => $request->daterangepicker,
            'salary_range' => $request->salary_range,
            'job_type' => $request->job_type,
            'status' => 1
        ];
      try{ 
       $jobs = ClientJob::create($data);
        if($jobs){
            $cl = ClientPostedJob::where('id', decrypt($job_id))->first();
            $cl->update(['is_approved' => 1, 'status' => 1]);
        }
        Session::flash('alert', 'success');
        Session::flash('message','Job Posted successfully');
        return back();
      }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message',$e->getMessage());
        return back();
      }
    }

    public function delete($job_id)
    {
        $job = ClientPostedJob::where('id', decrypt($job_id))->first();
        if($job)
        {
            $job->delete();
            Session::flash('alert', 'error');
            Session::flash('message','Job Posted Successfully');
            return back();
        }
        Session::flash('alert', 'error');
        Session::flash('message','Something went wrong');
        return back();

    }
}
