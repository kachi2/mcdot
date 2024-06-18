<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;

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





Route::get('/', [DashboardController::class, 'Index'])->name('home');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');

Route::controller(PagesController::class)->group(function(){
    Route::get('/page/{slug}', 'Pages')->name('pages');
    Route::get('/pages/{slug}/{hashid}/',  "subPages")->name('subpages');
    });

 Route::controller(JobsController::class)->group(function() {
        Route::get('jobs/index', 'Index')->name('users.jobs');
        Route::get('jobs/category/{category_id}', 'Category')->name('users.jobs.category');
        Route::get('jobs/details/{job_id}', 'Details')->name('job-details');
        Route::post('job/apply/{job_id}', 'ApplyJob')->name('apply-job');
    });

Route::controller(ServiceController::class)->group(function(){
Route::get('/services/{service_id}', '__invoke')->name('users.services');
});
Route::controller(ContactController::class)->group(function()
{
Route::get('contact', 'Index')->name('users.contact');
Route::post('contact/message', 'Contact')->name('users.contact.message');
});

Route::get('/blogs', [BlogController::class, 'Index'])->name('users.blogs');
Route::get('/blogs/details/{blog_id}', [BlogController::class, 'Details'])->name('users.blogs.details');
Route::get('/about', [AboutController::class, '__invoke'])->name('users.about');





require __DIR__.'/auth.php';
