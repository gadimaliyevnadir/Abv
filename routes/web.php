<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeOptionsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContMailController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MetaTagController;
use App\Http\Controllers\Admin\MissiaController;
use App\Http\Controllers\Admin\PhotosController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\ResultTitleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\BlogTagController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContsMailController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NewsTagController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialIconController;
use App\Http\Controllers\Admin\SolutionCategoryController;
use App\Http\Controllers\Admin\SolutionSubCategoryController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;


// FRONT
Route::group(['prefix' => FacadesLaravelLocalization::setlocale(), 'as' => 'front.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/vacancyDetail/{id}', [HomeController::class, 'vacancyDetail'])->name('vacancyDetail');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blogDetails/{id}/{slug}', [HomeController::class, 'blogDetails'])->name('blogDetails');
    Route::get('/photos', [HomeController::class, 'photos'])->name('photos');
    Route::get('/videos', [HomeController::class, 'videos'])->name('videos');
    Route::get('/vacancy', [HomeController::class, 'vacancy'])->name('vacancy');
    Route::get('/news', [HomeController::class, 'news'])->name('news');
    Route::get('/newsDetail/{id}/{slug}', [HomeController::class, 'newsDetail'])->name('newsDetail');
    Route::get('/projects', [HomeController::class, 'project'])->name('projects');
    Route::get('/projectDetail/{id}/{slug}', [HomeController::class, 'projectDetail'])->name('projectDetail');
    Route::get('/service', [HomeController::class, 'service'])->name('service');
    Route::get('/serviceDetail/{id}/{title}', [HomeController::class, 'serviceDetail'])->name('serviceDetail');
    Route::get('/team', [HomeController::class, 'team'])->name('team');
    Route::get('/teamDetail/{id}', [HomeController::class, 'teamDetail'])->name('teamDetail');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/blogs/{slug}', [HomeController::class, 'blogs'])->name('blogs');
    Route::post('/title',[HomeController::class,'title'])->name('title');
    Route::post('/blogsearch',[HomeController::class, 'blogsearch'])->name('blogsearch');
    Route::post('newssearch',[HomeController::class,'newssearch'])->name('newssearch');
    Route::get('/news/{slug}',[HomeController::class,'newss'])->name('newss');
    Route::get('/store',[HomeController::class,'store'])->name('store');
    Route::post('/contactForm', [HomeController::class, 'contactForm'])->name("contactForm");
});

// ADMIN
Route::get('/control/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/control/login-submit', [LoginController::class, 'loginSubmit'])->name('admin.login.submit');

Route::group(['prefix' => 'control', 'as' =>'admin.', 'middleware' => 'adminCheck'], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resource('vacancy',VacancyController::class);
    Route::resource('users', UserController::class);
    Route::resource('faqs',FaqController::class);
    Route::resource('metatags',MetaTagController::class);
    Route::resource('photos',PhotosController::class);
    Route::resource('videos',VideosController::class);
    Route::resource('result',ResultController::class);
    Route::resource('resulttitle',ResultTitleController::class);
    Route::resource('about',AboutController::class);
    Route::resource('missia',MissiaController::class);
    Route::resource('team',TeamController::class);
    Route::resource('vendorss',VendorController::class);
    Route::resource('settings',SettingController::class);
    Route::resource('blogtags',BlogTagController::class);
    Route::resource('blogs',BlogController::class);
    Route::resource('socialicons',SocialIconController::class);
    Route::resource('newstags',NewsTagController::class);
    Route::resource('news',NewsController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('solutioncategory',SolutionCategoryController::class);
    Route::resource('solsubcategory',SolutionSubCategoryController::class);
    Route::resource('slider',SliderController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('project',ProjectController::class);
    Route::resource('store',StoreController::class);

    Route::get('attributeedit/{id}', [ProjectController::class, 'attributeedit'])->name('attributeedit');
    Route::post('attributeupdate/{id}', [ProjectController::class, 'attributeupdate'])->name('attributeupdate');
    Route::get('attributeoption/{id}', [AttributeOptionsController::class, 'index'])->name('attributeoption.index');
    Route::get('attributeoption/create/{id}', [AttributeOptionsController::class, 'create'])->name('attributeoption.create');
    Route::get('attributeoption/edit/{id}', [AttributeOptionsController::class, 'edit'])->name('attributeoption.edit');
    Route::post('attributeoption/store/', [AttributeOptionsController::class, 'store'])->name('attributeoption.store');
    Route::post('attributeoption/update/{id}', [AttributeOptionsController::class, 'update'])->name('attributeoption.update');
    Route::delete('attributeoption/destroy/{id}', [AttributeOptionsController::class, 'destroy'])->name('attributeoption.destroy');
});
Route::post('/email', [ContMailController::class, 'email'])->name('email');
Route::post('/emails', [ContsMailController::class, 'emails'])->name('emails');
