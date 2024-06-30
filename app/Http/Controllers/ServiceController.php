<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\SubMenu;
use Vinkla\Hashids\Facades\Hashids;

class ServiceController extends Controller
{
    //

    public function __invoke($service_id)
    {

        $service = Page::where('sub_menu_id', decryptId($service_id))->first();
        if(!$service){
            return back();
        }
        $services = SubMenu::where('is_active', 1)->latest()->get();
        foreach($services as $item){
            $item->hashid = Hashids::connection('jobs')->encode($item->id);
        }
        return view('frontend.pages')
        ->with('service', $service)
        ->with('services', $services);
    }


    public function SearchService(Request $request)
    {
        if($request->search)
        {
            $service = Page::where('title', 'LIKE', `%$request->search%`)->first();
            $services = SubMenu::where('is_active', 1)->latest()->get();
            return view('frontend.pages')
            ->with('service', $service)
            ->with('services', $services);
        }
    }
}
