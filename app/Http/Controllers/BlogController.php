<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Blog;

class BlogController extends Controller
{
    //


    public function Index(){
        $blog = Blog::latest()->get();
        $recent = Blog::where('views', '>', '2')->inRandomOrder()->get();
        HashIds($blog);
        HashIds($recent);
        return view('frontend.blogs')
        ->with('blogs', $blog)
        ->with('recents', $recent);
    }

    public function Details($id){
        $popular =  Blog::latest()->take(5)->get();
        $blog = Blog::where('id', decryptId($id))->first();
        $blog->update(['views' => $blog->views + 1]);
        HashIds($popular);
        return view('frontend.blog_details',[
            'blog' => $blog,
            'popular' => $popular,
            
        ]);
    }

}
