<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\AdminActivity;
use App\Models\Applicant;
use App\Models\AppliedJob;
use App\Models\Blog;
use App\Models\ClientJob;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    

    public function Index(){
        return view('admin.index', [
            'applicants' => Applicant::latest()->get(),
            'blogs' =>  Blog::get(),
            'jobs' => ClientJob::get(),
            'logins' => AdminActivity::take(5)->latest()->get()
        ])
        ->with('bheading', 'Index')
        ->with('breadcrumb', 'Index');
    }
}
