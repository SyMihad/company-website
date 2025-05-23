<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AgroController;
use App\Http\Controllers\MultiimageController;
use App\Models\Multipic;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChangePassController;
use App\Http\Controllers\RealEstateController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialController;
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();
    $service = DB::table('services')->first();

    return view('home', compact('brands','abouts','images','service'));
})->name('main.home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // Route::get('/user/logout', [AdminController::class, 'logout'])->name('user.logout');

    //brand
    Route::get('/brand/all', [BrandController::class, 'index'])->name('all.brand');

    Route::post('/brand/store', [BrandController::class, 'store'])->name('store.brand');

    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');

    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');

    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');


    // admin routes
    Route::get('home/slider', [HomeController::class, 'homeslider'])->name('home.slider');

    Route::get('add/slider', [HomeController::class, 'addslider'])->name('add.slider');

    Route::Post('store/slider', [HomeController::class, 'storeslider'])->name('store.slider');

    Route::get('slider/delete/{id}', [HomeController::class, 'deleteslider'])->name('slider.delete');

    Route::get('slider/edit/{id}', [HomeController::class, 'editlider'])->name('slider.edit');

    Route::post('slider/update/{id}', [HomeController::class, 'updateslider'])->name('slider.update');

    //about
    Route::get('/home/about', [AboutController::class, 'index'])->name('home.about');

    Route::get('/about/create', [AboutController::class, 'addabout'])->name('add.about');

    Route::Post('about/store', [AboutController::class, 'storeslider'])->name('store.about');

    Route::get('/about/edit/{id}', [AboutController::class, 'editabout'])->name('about.edit');

    Route::post('/about/update/{id}', [AboutController::class, 'updateabout'])->name('about.update');

    Route::get('/about/delete/{id}', [AboutController::class, 'deleteabout'])->name('about.delete');

    // PORTFOLIO

    Route::get('/multi/all', [MultiimageController::class, 'index'])->name('multi.image');

    Route::post('/multi/add', [MultiimageController::class, 'multiimage'])->name('store.images');

    Route::get  ('/multi/delete/{id}', [MultiimageController::class, 'multidelete'])->name('multy.delete');

    //contact admin
    Route::get('/admin/contact', [ContactController::class, 'admincontact'])->name('contact.admin');

    Route::get('/admin/contact/add', [ContactController::class, 'adminaddcontact'])->name('add.contact');

    Route::post('/admin/contact/add', [ContactController::class, 'adminstorecontact'])->name('store.contact');

    //home contact

    Route::get('/contact/delete/{id}', [ContactController::class, 'deletecontact'])->name('contact.delete');

    Route::get('/contact/edit/{id}', [ContactController::class, 'editcontact'])->name('contact.edit');

    Route::post('/contact/update/{id}', [ContactController::class, 'updatecontact'])->name('contact.update');

    Route::get('/contact/message', [ContactController::class, 'contactmessage'])->name('contact.message');

    Route::get('/contact/dmessage{id}', [ContactController::class, 'cmessagedelete'])->name('message.delete');

    Route::get('/contact/vmessage{id}', [ContactController::class, 'viewmessage'])->name('message.view');



    // chnage password for user

    Route::get('/user/password', [ChangePassController::class, 'changepassword'])->name('chnage.password');

    Route::post('/password/update', [ChangePassController::class, 'updatepassword'])->name('password.update');

    // user profile
    Route::get('/user/profile', [ChangePassController::class, 'profileupdate'])->name('chnage.profile');

    Route::post('/user/profile/update', [ChangePassController::class, 'saveprofile'])->name('update.user.profile');

    //Agro

    Route::get('/agro-admin', [AgroController::class, 'index'])->name('agro.index');
    Route::post('/agro/update/{id}', [AgroController::class, 'update'])->name('agro.update');



    //services

    Route::get('/admin/services', [ServiceController::class, 'index'])->name('service.view');

    Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('service.store');

    Route::post('/admin/services/update/{id}', [ServiceController::class, 'update'])->name('services.update');



    //social links
    Route::get('/admin/social', [SocialController::class, 'index'])->name('social.view');

    Route::post('/admin/social/create', [SocialController::class, 'store'])->name('social.create');

    Route::post('/admin/social/update/{id}', [SocialController::class, 'undate'])->name('social.update');

    //About Us Admin
    Route::resource('admin/about', AboutUsController::class)
        ->except(['show'])
        ->names([
            'index' => 'about_us.index',
            'create' => 'about_us.create',
            'store' => 'about_us.store',
            'edit' => 'about_us.edit',
            'update' => 'about_us.update',
            'destroy' => 'about_us.destroy',
        ]);

    //About Us Admin
    Route::resource('admin/real_estate', RealEstateController::class)
        ->except(['show'])
        ->names([
            'index' => 'real_estate.index',
            'create' => 'real_estate.create',
            'store' => 'real_estate.store',
            'edit' => 'real_estate.edit',
            'update' => 'real_estate.update',
            'destroy' => 'real_estate.destroy',
        ]);

});


Route::get('user/logout', [AdminController::class, 'logout'])->name('user.logout');


//Portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', [ContactController::class, 'homeindex'])->name('contact');

Route::get('/about_us', [AboutUsController::class, 'home_about_us'])->name('about_us');

Route::get('/real-estate', [RealEstateController::class, 'home_building_list'])->name('real-estate');

Route::get('/real-estate/building/{id}', [RealEstateController::class, 'show'])->name('real.estate.show');

Route::get('/agro', [AgroController::class, 'homeagro'])->name('agro.home');

Route::post('/summernote/upload', [App\Http\Controllers\SummernoteController::class, 'upload'])->name('summernote.upload');


 //home coantcat send

 Route::post('/contact/form', [ContactController::class, 'formcontact'])->name('contact.form');




