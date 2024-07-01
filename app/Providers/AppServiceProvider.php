<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Setting;
use App\Models\AdminNotify;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
        $menus = Menu::where('status', 1)->get();
        $menus->load('subMenu');
        foreach($menus as $mm){HashIds($mm->subMenu);}
        HashIds($menus);
        // dd($menus);
        $view->with('menus', $menus);

        $view->with('settings', Setting::latest()->first());
        $view->with('read_notify', AdminNotify::where('status', 1)->latest()->take(2)->get());
        $view->with('unread_notify', AdminNotify::where('status', 0)->latest()->take(10)->get());
        });
    }
}
