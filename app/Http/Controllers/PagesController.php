<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Support\Facades\Mail;
use App\Models\Page;
use App\Models\Faq;
use App\Models\ClientJob;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactUs;
use App\Models\Industry;
use App\Models\Setting;

class PagesController extends Controller
{
    public function Pages($id = null){
        $id = decrypt($id);
        $menuId = Menu::where('id', $id)->first();
       
        if($menuId->has_child){
            $pages['pages'] = SubMenu::where(['menu_id' => $menuId->id, 'is_active' => 1])->get();
            $pages['breadcrums'] = $pages['pages'][0]->Menu;
            return view('frontend.pages', $pages);
        }else{
            $pages = Page::where('menu_id', $menuId->id)->first();
        if(!$pages){
            return back();
        }
            $pages['pages'] = Page::where('menu_id', $menuId->id)->first();
            $pages['breadcrums'] =  $menuId;
            $pages['sidebar'] = Menu::get();
            $pages['sidebars'] = Menu::get();
            $pages['menus'] = Menu::get();
            return view('frontend.subpages', $pages);
        }
    }


    public function Subpages($id = null){
        $id = decrypt($id);
        $id = SubMenu::where('id', $id)->first();
        $pages = Page::where('sub_menu_id', $id->id)->first();
        if(!$pages){
            return back();
        }
        $pages['pages'] = $pages;
        $pages['breadcrums'] =  $id;
        $pages['sidebar'] = SubMenu::where(['is_active' =>1, 'menu_id' =>$id->menu_id])->get();
        return view('frontend.subpages', $pages);
    } 

    public function BlogDetails($id = null){
        $id = decrypt($id);
        $menuId = Menu::where('id', $id)->first();
        $page['pages'] = 'Blog';
        $page['breadcrums'] =  $menuId;
        return view('frontend.blog_details', $page, [
            'blogs' => Blog::where('id', $id)->first(),
            'popular' => Blog::latest()->take(5)->get(),
            
        ]);
    }

    public function JobCategory($id = null){
        $id = explode('-', $id);
        return view('frontend.jobs', [
            'jobs' => ClientJob::where('industries_id', $id)->get(),
            'industries' => Industry::get()
        ]);
    }

    public function ContactEmails(Request $request){

        $settings = Setting::latest()->first();
        if(!$request->key){
            return back();
        }
       $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'captcha' => 'required',
            
        ]);
        $capt = captcha_check($request->captcha);
        if(!$capt){
            Session::flash('message', 'Captcha does not match, try again');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
           
        }
        $data = [
            'name' =>  $request->name,
            'phone' => $request->phone,
            'email' =>  $request->email,
            'message' => $request->message
        ];
        Session::flash('message', 'Request sent Successfully');
        Session::flash('alert', 'success');
        Mail::to([$settings->site_email])->send(new ContactUs($data));

       // dd($email);
        return back();
    }
}
