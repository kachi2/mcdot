<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\FaqContoller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\Check2faController;
use App\Http\Controllers\Admin\TaglineController;


Route::get('/2fa', [Check2faController::class, 'Index'])->name('check2fa');
Route::post('/2fa/verify/', [Check2faController::class, 'VerifyCode'])->name('VerifyCodes');


Route::group(['prefix' => 'manage/website', 'as' => 'admin.'], function(){
    Route::middleware(['auth'])->group(function(){
     Route::middleware(['check2fa'])->group(function(){
    Route::get('/', [DashboardController::class, 'Index'])->name('index');
    Route::get('/index', [DashboardController::class, 'Index'])->name('index');
    Route::controller(MenuController::class)->group(function(){
        Route::get('menus', 'Index')->name('menu.index');
        Route::get('menu/create',  'Create')->name('addMenu');
        Route::post('menu/store', 'Store')->name('MenuStore');
        Route::get('/menu/edit/{id}','Edit')->name('menu.edit');
        Route::post('menu/update/{id}',  'Update')->name('MenuUpdate');
        Route::get('/menu/disable/{id}',  'Disable')->name('MenuDisable');
        Route::get('/menu/enable/{id}',  'Enable')->name('MenuEnable');
        Route::get('/submenu/create/{id}',  'SubMenuCreate')->name('subMenu.Create');
        Route::post('/submenu/store/{id}', 'SubMenuStore')->name('SubMenuStore');
        Route::get('/submenu/edit/{id}',  'SubMenuEdit')->name('subMenu.edit');
        Route::post('/submenu/update/{id}', 'SubMenuUpdate')->name('SubMenuUpdate');
        Route::get('/submenu/delete/{id}',  'SubMenuDelete')->name('subMenu.delete');

    });

    Route::controller(PagesController::class)->group(function(){
        Route::get('/pages', 'Index')->name('manage.pages');
        Route::get('/pages/create/',  'PagesCreate')->name('Pages.Create');
        Route::post('/pages/store/', 'PagesStore')->name('PagesStore');
        Route::get('/pages/edit/{id}',  'PagesEdit')->name('PagesEdit');
        Route::post('/pages/update/{id}', 'PagesUpdate')->name('PagesUpdate');
        Route::get('/pages/delete/{id}',  'PagesDelete')->name('PagesDelete');
        Route::get('/pages/activate/{id}',  'PagesActivate')->name('PagesActivate');
        Route::get('/pages/disable/{id}',  'PagesDisable')->name('PagesDisable');
        Route::get('/pages/submenu/{id}',  'GetSubMenus')->name('page.getSubmenu');
    });

    Route::controller(BlogController::class)->group(function(){
        Route::get('/wesite/blog', 'Index')->name('blogs.index');
        Route::get('/wesite/blog/create', 'BlogsCreate')->name('BlogsCreate');
        Route::post('/blog/store', 'BlogsStore')->name('BlogsStore');
        Route::get('/blog/edit/{id}', 'BlogsEdit')->name('BlogsEdit');
        Route::post('/blog/update/{id}', 'BlogsUpdate')->name('BlogsUpdate');
        Route::get('/wensite/blog/delete/{id}', 'BlogsDelete')->name('BlogsDelete');
        Route::get('/blog/activate/{id}', 'BlogsActivate')->name('BlogsActivate');
        Route::get('/webiste/blog/diabled/{id}', 'BlogsDisable')->name('BlogsDisable');
    });
  
    Route::controller(JobsController::class)->group(function(){
        Route::get('/wesite/job', 'Index')->name('Jobs.index');
        Route::get('/wesite/jobs/create', 'JobsCreate')->name('JobsCreate');
        Route::post('/jobs/store', 'JobsStore')->name('JobsStore');
        Route::get('/jobs/edit/{id}', 'JobsEdit')->name('JobsEdit');
        Route::post('/jobs/update/{id}', 'JobsUpdate')->name('JobsUpdate');
        Route::get('/wensite/jobs/delete/{id}', 'JobsDelete')->name('JobsDelete');
        Route::get('/jobs/activate/{id}', 'JobsActivate')->name('JobsActivate');
        Route::get('/webiste/jobs/diabled/{id}', 'JobsDisable')->name('JobsDisable');
        Route::get('/webiste/jobs/applied/{id}', 'JobsApplied')->name('JobsApplied');
        Route::get('/webiste/jobs/download/{id}', 'DownloadCV')->name('DownloadCV');
    });

    Route::controller(SettingsController::class)->group(function(){
        Route::get('/settings/index', 'Index')->name('settings.index');
        Route::get('/settings/testimonias', 'Testimonials')->name('settings.testimonials');
        Route::get('/settings/socials', 'Socials')->name('settings.socials');
        Route::get('/settings/about', 'Abouts')->name('settings.abouts');
        Route::get('/settings/add/testimonial', 'CreateTestimonial')->name('settings.createTestimonial');
        Route::post('/settings/store/testimonial', 'StoreTestimonial')->name('settings.storeTestimonial');
        Route::get('/settings/edit/testimonial/{id}', 'EditTestimonial')->name('settings.editTestimonial');
        Route::post('/settings/update/testimonial/{id}', 'UpdateTestimonial')->name('settings.updateTestimonial');
        Route::get('/settings/delete/testimonial/{id}', 'DeleteTestimonial')->name('settings.deleteTestimonial');
        Route::post('/settings/update/socials', 'UpdateSocials')->name('settings.updateSocials');
        Route::post('/settings/update/settings', 'UpdateSettings')->name('settings.updateSettings');
        Route::get('/admin/user', 'UserAccount')->name('userAccount');
        Route::post('/admin/user/account', 'UpdateAccount')->name('UpdateAccount');
    });

    Route::resource('/tags', TaglineController::class);

    Route::controller(SliderController::class)->group(function(){
        Route::get('/settings/sliders/index', 'Index')->name('settings.sliders');
        Route::get('/settings/sliders/create', 'CreateSlider')->name('sliderCreate');
        Route::post('/settings/sliders/store', 'StoreSlider')->name('sliderStore');
        Route::get('/settings/sliders/edit/{id}', 'EditSlider')->name('sliderEdit');
        Route::post('/settings/sliders/update/{id}', 'UpdateSlider')->name('sliderUpdate');
        Route::get('/settings/sliders/delete/{id}', 'DeleteSlider')->name('sliderDelete');
        Route::get('/settings/sliders/activate/{id}', 'ActivateSlider')->name('sliderActivate');
        Route::get('/settings/sliders/deactivate/{id}', 'DeactivateSlider')->name('sliderDeactivate');
    });


    Route::controller(FaqContoller::class)->group(function(){
        Route::get('/faq/faq', 'Index')->name('faq.index');
        Route::get('/faq/create', 'Create')->name('faqCreate');
        Route::post('/faq/store', 'Store')->name('faqStore');
        Route::get('/faq/edit/{id}', 'Edit')->name('faqEdit');
        Route::post('/faq/update/{id}', 'Update')->name('faqUpdate');
        Route::get('/faq/delete/{id}', 'Delete')->name('faqDelete');
    });
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category/index', 'Index')->name('category.index');
        Route::get('/category/create', 'Create')->name('categoryCreate');
        Route::post('/category/store', 'Store')->name('categoryStore');
        Route::get('/category/edit/{id}', 'Edit')->name('categoryEdit');
        Route::post('/category/update/{id}', 'Update')->name('categoryUpdate');
        Route::get('/category/delete/{id}', 'Delete')->name('categoryDelete');
    });
    

});
});
});