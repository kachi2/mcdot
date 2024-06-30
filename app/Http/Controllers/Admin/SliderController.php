<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Slider;
use App\Models\SubMenu;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{

    public function Index(){
        return view('admin.settings.sliders', [
            'sliders' => Slider::latest()->get()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }
    public function CreateSlider(){
        return view('admin.settings.create_sliders', [
            'services' => SubMenu::where('menu_id', 2)->get(),
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function StoreSlider(Request $request){
        $valid = Validator::make($request->all(),[
            'image' => 'required',
            'content' => 'nullable',
            'title' => 'nullable',
        ]);


        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
    }
    if($request->link) $link = route('subpages', encrypt($request->link));
        $data = [
            'image' =>   $fileName,
            'content' => $request->content,
            'title' =>  $request->title,
            'status' => 1,
            'links' => isset($link)?$link:NULL
        ];

        Slider::create($data);
        Session::flash('alert', 'success');
        Session::flash('message', 'Slider Added Successfully');
        return back();
    }

   
    public function EditSlider($id){
        $slider = Slider::where('id', decrypt($id))->first();
        return view('admin.settings.edit_sliders',['slider'  => $slider , 'services' => subMenu::get()])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateSlider(Request $request, $id){

        $sl = Slider::where('id', decrypt($id))->first();
        
        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = pathinfo($image, PATHINFO_FILENAME);
            $fileName = $name.time().'.'.$ext;
            $image->move('images',$fileName);
    }else{
        $fileName = $sl->image;
    }
    // if($request->link) $link = route('subpages', encrypt($request->link));
        $data = [
            'image' =>  $fileName,
            'content' => $request->content,
            'title' =>  $request->title,
            // 'links' => isset($link)?$link:NULL
        ];
         $sl->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('alert', 'Slider Updated Successfully');
        return back();
    }

    public function DeleteSlider($id){
        $slider = Slider::where('id', decrypt($id))->first();
        if($slider){
            $slider->delete();
            Session::flash('alert', 'error');
            Session::flash('alert', 'Slider Deleted Successfully');
            return back();
        }
        Session::flash('alert', 'error');
        Session::flash('alert', 'Somthing went wrong');
        return back();
    }

    public function ActivateSlider($id){
        $slid = Slider::where('id', decrypt($id))->first();
        $slid->update(['status' => 1]);
        Session::flash('alert', 'success');
        Session::flash('alert', 'Slider Activated Successfully');
        return back();
    }
    
    public function DeactivateSlider($id){
        $slid = Slider::where('id', decrypt($id))->first();
        $slid->update(['status' => null]);
        Session::flash('alert', 'error');
        Session::flash('alert', 'Slider Deactivated Successfully');
        return back();
    }
   

}
