<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ClientJob;
use App\Models\ClientLogo;
use App\Models\Page;
use App\Models\Slider;
use App\Models\SubMenu;
use App\Models\Tagline;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function Index(){
        $jobs =  ClientJob::latest()->get();
        $blogs = Blog::latest()->take(3)->get();
        HashIds($jobs);
        HashIds($blogs);
        return view('frontend.dashboard', [
            'sliders' => Slider::where('status', 1)->get(),
            'blogs' => $blogs,
            'services' => Page::latest()->get(),
            'testimonials' => Testimonial::latest()->get(),
            'tags' => Tagline::latest()->get(),
            'jobs' => $jobs
          
        ]);
    }

    public function RequestService(){
        
    }
}
