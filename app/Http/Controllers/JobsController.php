<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ClientJob;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class JobsController extends Controller
{
    //

    public function Details($job_id){

        $id = HashIds::connection('jobs')->decode($job_id)[0];
        $jobs = ClientJob::latest()->get();
        $categ = Category::latest()->first();
        HashIds($categ);
        HashIds($jobs);
       $job = ClientJob::whereId($id)->first();
       return view('frontend.jobs_details')
       ->with('job', $job)
       ->with('jobs', $jobs)
       ->with('categories', $categ);
    }
}
