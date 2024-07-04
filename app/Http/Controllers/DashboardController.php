<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
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
        $jobs =  ClientJob::latest()->take(6)->get();
        $blogs = Blog::latest()->take(3)->get();
        $menus = SubMenu::where('is_active', 1)->latest()->get();
        HashIds($jobs);
        HashIds($blogs);
        HashIds($menus);
        return view('frontend.dashboard', [
            'sliders' => Slider::where('status', 1)->get(),
            'blogs' => $blogs,
            'services' => $menus,
            'testimonials' => Testimonial::latest()->get(),
            'tags' => Tagline::latest()->get(),
            'jobs' => $jobs,
            'categories' => Category::latest()->get()
          
        ]);
    }

    public function RequestService(){
        
    }
}
