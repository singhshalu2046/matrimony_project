<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteSettingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\StateController;



use App\Models\User;

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



Route::get('/', [UserController::class, 'Home']);
Route::get('/login', [UserController::class, 'UserLoginPage'])->name('login');
Route::get('/dashboard', [UserController::class, 'UserDashboard']);
Route::post('login', [UserController::class, 'UserLogin']);
Route::post('signup', [UserController::class, 'SignUP']);

Route::group(['middleware' => "auth"], function () {

    Route::post('/changepassword', [UserController::class, 'ChangePassword']);
    Route::post('/updateprofile', [UserController::class, 'CustomerUpdate']);
    Route::get('/dashboard', [UserController::class, 'UserDashboard']);

    //Logout
    Route::get('/logout', [UserController::class, 'Logout']);
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/login', [AdminController::class, 'Login']);
    Route::post('login', [AdminController::class, 'AdminLogin']);
    Route::get('dashboard', [AdminController::class, 'Dashboard']);
    Route::get('profile/{id}', [AdminController::class, 'Profile']);
    Route::post('profile', [AdminController::class, 'Save']);
    Route::get('changepassword/{id}', [AdminController::class, 'ChangePassword']);
    Route::post('changepassword', [AdminController::class, 'ChangePasswordSave']);
    Route::get('logout', [AdminController::class, 'Logout']);
    Route::get('/getpass', [AdminController::class, 'getpass']);


    //Website Setting Route
    // Route::get('websitesetting', [WebsiteSettingController::class, 'WebsiteSetting']);
    // Route::post('websitesetting', [WebsiteSettingController::class, 'Save']);

    //Testimonial Route
    // Route::get('testimonial', [TestimonialController::class, 'AllTestimonial']);
    // Route::get('addtestimonial', [TestimonialController::class, 'AddTestimonial']);
    // Route::post('addtestimonial', [TestimonialController::class, 'AddTestimonialData']);
    // Route::post('deletetestimonial', [TestimonialController::class, 'DeleteTestimonial']);
    // Route::get('updatetestimonial/{id}', [TestimonialController::class, 'UpdateTestimonial']);
    // Route::post('updatetestimonial', [TestimonialController::class, 'Save']);

    // //Banner Route
    // Route::get('banner', [BannerController::class, 'AllBanner']);
    // Route::get('addbanner', [BannerController::class, 'AddBanner']);
    // Route::post('addbanner', [BannerController::class, 'AddBannerData']);
    // Route::post('deletebanner', [BannerController::class, 'DeleteBanner']);
    // Route::get('updatebanner/{id}', [BannerController::class, 'UpdateBanner']);
    // Route::post('updatebanner', [BannerController::class, 'Save']);

    // // Customer Route

    Route::post('deletecustomer', [CustomerController::class, 'DeleteCustomer'])->name('customer.deletecustomer');

    Route::resource('customer', CustomerController::class);

    Route::resource('country', CountryController::class);
    Route::resource('state', StateController::class);

    Route::resource('qualification', QualificationController::class);
    Route::resource('language', LanguageController::class);


    Route::post('common/delete', [CommonController::class, 'delete'])->name('common.delete');

    // Route::get('customer', [CustomerController::class, 'AllCustomer']);
    // Route::get('addcustomer', [CustomerController::class, 'AddCustomer']);
    // Route::post('addcustomer', [CustomerController::class, 'AddCustomerData']);
    // Route::post('deletecustomer', [CustomerController::class, 'DeleteCustomer']);
    // Route::get('updatecustomer/{id}', [CustomerController::class, 'UpdateCustomer']);
    // Route::post('updatecustomer', [CustomerController::class, 'Save']);

});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
