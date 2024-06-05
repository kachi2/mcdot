<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientJobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientLogoController;
use App\Http\Controllers\FaqContoller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MenuController as MenuPage;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Check2faController;
use LDAP\Result;

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
Route::get('/page', 'Pages')->name('users.services');
Route::get('/pages',  "SubPages")->name('users.blogs');
Route::get('/blog/details/',  'BlogDetails')->name('users.contact-us');
Route::get('/jobs/industries/',  'JobCategory')->name('users.about-us');
Route::post('/contactus/request', 'ContactEmails')->name('users.jobs');
Route::get('/page/sswe', 'Pages')->name('users.homecare-services');
Route::get('/pages/swews',  "SubPages")->name('users.dementia-care');
Route::get('/blog/details/wewe',  'BlogDetails')->name('users.elderly-care');
Route::get('/jobs/industries/asss',  'JobCategory')->name('users.liver-in-care');
Route::post('/contactus/request/asas', 'ContactEmails')->name('users.nursing');
Route::post('/contactus/request/asas/sdsds', 'ContactEmails')->name('users.homecare-worker');
});

Route::post('/jobs/apply/{id}', [ClientJobController::class, 'ApplyJob'])->name('apply.job');
Route::get('/job/details/{id}',  [ClientJobController::class, 'Details'])->name('job-details');
Route::post('/request/services/',  [ClientJobController::class, 'RequestService'])->name('request-service');


require __DIR__.'/auth.php';
