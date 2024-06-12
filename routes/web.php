<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


require __DIR__.'/admin.php';




Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');

Route::controller(PagesController::class)->group(function(){
    Route::get('/page/{slug}', 'Pages')->name('pages');
    Route::get('/pages/{slug}/{submenu}',  "SubPages")->name('subpages');
    });

    Route::controller(JobsController::class)->group(function() {
        Route::get('jobs/details/{job_id}', 'Details')->name('job-details');
         Route::post('job/apply/{job_id}', 'ApplyJob')->name('apply-job');
    });


require __DIR__.'/auth.php';
