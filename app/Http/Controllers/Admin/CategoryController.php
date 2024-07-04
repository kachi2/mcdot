<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ClientJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    //

    public function Index(){

        return view('admin.category.index', 
        [
            'category' => Category::latest()->get()
        ])
        ->with('bheading', 'Manage Jobs Category')
        ->with('breadcrumb', 'Jobs Category');
    }

    public function Create(){
        return view('admin.category.create')
        ->with('bheading', 'Create Jobs Category')
        ->with('breadcrumb', 'Create Jobs Category');
    }

    public function Store(Request $request){

        $request->validate([
             'name' => 'required'
         ]);
         $check = Category::where('name', $request->name)->first();
         if($check){
             Session::flash('alert', 'error');
             Session::flash('message','Category already exist');
             return back()->withInput();
         }
 
         if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('assets/',$fileName);
        }
         $menu = Category::create([
             'name' => $request->name,
             'image' => $$fileName??null,
             'title' => $request->title
         ]);
         if($menu){
             Session::flash('alert', 'success');
             Session::flash('message','Category added successfully');
             return back();
         }
     }
 
     public function Edit($id = null){
         return view('admin.category.edit', ['category' => Category::where('id', decrypt($id))->first()])
         ->with('bheading', 'Category Edit')
         ->with('breadcrumb', 'Job Category');
     }
 
     public function Update(Request $request, $id){
         $menu = Category::findorfail(decrypt($id));
         if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('assets/',$fileName);
        }
         Category::where('id', $menu->id)->update([
            'name' => $request->name,
            'image' => $fileName??null,
            'title' => $request->title
        ]);
         Session::flash('alert', 'success');
         Session::flash('message',' Category Updated successfully');
         return back();
     }
 
  
 
     public function Delete($id){
         $menu = Category::findorfail(decrypt($id));
         $jobs = ClientJob::where('category_id', $menu->id)->first();
         if($jobs){
            Session::flash('alert', 'error');
            Session::flash('message','You cannot delete this Category, Jobs are already assigned to it');
            return back();
         }
         $menu->delete();
         Session::flash('alert', 'success');
         Session::flash('message','Category Deleted successfully');
         return back();
     }
}
