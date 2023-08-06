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
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\SubCastController;
use App\Http\Controllers\DistrictController;

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
Route::get('getcast', [CastController::class,'GetCast']);
Route::get('getsubcast', [SubCastController::class,'GetSubCast']);
Route::group(['middleware' => "auth"], function () {

    Route::post('/changepassword', [UserController::class, 'ChangePassword']);
    Route::post('/updateprofile', [UserController::class, 'CustomerUpdate']);
    Route::get('/dashboard', [UserController::class, 'UserDashboard']);
    Route::get('/profile', [UserController::class, 'UserProfile']);
    Route::post('/profile', [UserController::class, 'UpdateProfile']);
    Route::get('/education-occupation', [UserController::class, 'UserEducation']);
    Route::post('/education-occupation', [UserController::class, 'UserEducationSave']);


    Route::get('/contact-info', [UserController::class, 'contactInfo']);
    Route::get('/family-info', [UserController::class, 'familyInfo'])->name('family-info');
    Route::post('save-family-info', [UserController::class, 'saveFamilyInfo'])->name('save-family-info');
    Route::post('save-contact-info', [UserController::class, 'saveContactInfo'])->name('save-contact-info');
    Route::get('/get-state-district', [UserController::class, 'getStateDistrict'])->name('get-state-district');

    // Route::get('enhanced-profile', [UserController::class, 'enhancedProfile'])->name('enhanced-profile');


    

    //Logout
    Route::get('/logout', [UserController::class, 'Logout']);
});

Route::get('admin-login', [AdminController::class, 'Login'])->name('admin-login');;
Route::post('admin/loginsave', [AdminController::class, 'AdminLogin']);
Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware'=>'admin'], function () {

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

    Route::post('deletecustomer', [CustomerController::class, 'DeleteCustomer'])->name('customer.deletecustomer');

    Route::resource('customer', CustomerController::class);

    Route::resource('country', CountryController::class);
    Route::resource('state', StateController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('qualification', QualificationController::class);
    Route::resource('language', LanguageController::class);
    Route::resource('religion', ReligionController::class);
    Route::resource('cast', CastController::class);
    Route::resource('subcast', SubCastController::class);
    Route::post('common/delete', [CommonController::class, 'delete'])->name('common.delete');
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
