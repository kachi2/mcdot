<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VacancyController;

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
        Route::get('jobs/category/{category_id?}', 'Category')->name('users.jobs.category');
        Route::get('jobs/details/{job_id}', 'Details')->name('job-details');
        Route::post('job/apply/{job_id}', 'ApplyJob')->name('apply-job');
        Route::get('jobs/search', 'SearchJobs')->name('search.jobs');
    }); 

Route::controller(ServiceController::class)->group(function(){
Route::get('/services/{service_id}', '__invoke')->name('users.service.category');
});
Route::controller(ContactController::class)->group(function()
{
Route::get('contact', 'Index')->name('users.contact');
Route::post('contact/message', 'Contact')->name('users.contact.message');
});

Route::get('/blogs', [BlogController::class, 'Index'])->name('users.blogs');
Route::get('/blogs/details/{blog_id}', [BlogController::class, 'Details'])->name('users.blogs.details');
Route::get('/about', [AboutController::class, '__invoke'])->name('users.about');

// Route::get('/request/service', [DashboardController::class, 'RequestService'])->name('users.request.service');
Route::controller(CVController::class)->group(function(){
    Route::get('cv/upload', 'Index')->name('upload.cv');
    Route::post('/cv/store', 'SubmitCV')->name('store.cv');
});

Route::controller(VacancyController::class)->group(function(){
Route::get('/vacancies', 'Index')->name('client.vacancy');
Route::post('/vacancy/store', 'Store')->name('clients.job_store');
});

Route::controller(StaffController::class)->group(function() {
 Route::get('staff/permanent', 'PermanentRecruiting')->name('users.permanent.staff');
 Route::get('staff/temporary', 'TemporaryRecruiting')->name('users.temporary.staff');
 Route::get('staff/adhoc', 'AdhocRecruiting')->name('users.adhoc.staff');
});


require __DIR__.'/auth.php';
