<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\business\CustomerController;
use App\Http\Controllers\business\BProfileController;
use App\Http\Controllers\business\BussinessController;
use App\Http\Controllers\business\SupplierController;

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



Route::group([], function() {

// Route::post('/login1',[LoginController::class,'index']);

Route::get('/', function () {
    return view('superadmin/login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[HomeController::class,'index'])->name('dashboard');

Route::get('/bussiness-admin',[BusinessController::class,'index']);
Route::post('/getadmin',[BusinessController::class,'getadmin']);
Route::get('/package',[BusinessController::class,'package']);
Route::post('/editadmin/{id}',[BusinessController::class,'editadmin']);
Route::get('/add-bussiness-admin',[BusinessController::class,'addbussiness']);
Route::get('/user-permission/{id}',[BusinessController::class,'permission']);
Route::get('/user-block/{id}',[BusinessController::class,'block']);
Route::get('/user-unblock/{id}',[BusinessController::class,'unblock']);
Route::get('/bussiness-admin-profile',[BusinessController::class,'admin_profile']);
Route::get('/edit-bussiness-admin/{id}',[BusinessController::class,'edit_profile']);
Route::get('/delete-bussiness-admin/{id}',[BusinessController::class,'destroy']);
#payment
Route::get('/payments',[PaymentController::class,'index']);
Route::get('/payment-setting',[PaymentController::class,'setting']);
#privacy-policies
Route::get('/privacy-policies',[PrivacyController::class,'index']);
Route::post('/getpolicy',[PrivacyController::class,'store']);
Route::post('/updatepolicy',[PrivacyController::class,'update']);
Route::get('/editpolicy',[PrivacyController::class,'edit']);
Route::get('/deletepolicy',[PrivacyController::class,'destroy']);
#terms-condition
Route::get('/terms-condition',[TermsController::class,'index']);
Route::post('/getterms',[TermsController::class,'store']);
Route::post('/updateterms',[PrivacyController::class,'update']);
Route::get('/editterms',[PrivacyController::class,'edit']);
Route::get('/deleteterms',[PrivacyController::class,'destroy']);
#email-settings
Route::get('/email-settings',[EmailController::class,'index']);
#profile
Route::get('/userprofile',[ProfileController::class,'index']);
Route::post('/getprofile',[ProfileController::class,'update']);
#chat
Route::get('/chat',[ChatController::class,'index']);
});





#--------------------------------#SUBDOMAIN--------------------------------------------------------------


Route::domain('{domain}'.env('SESSION_DOMAIN'))->group(function() {




	 Route::get('/login', function () {
	    return view('businessadmin/login');
	})->name('/');
	Route::get('/Register', function () {
	    return view('businessadmin/register');
	});
	Route::post('/Register',[BProfileController::class,'register']);


	Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	    return view('businessadmin.dashboard');
	})->name('dashboard');
	#profile
	Route::get('/userprofile',[BussinessController::class,'userprofile']);
	Route::post('/getprofile',[BussinessController::class,'getprofile']);
	Route::get('/user-detail',[BussinessController::class,'userdetail']);
	#planner
	Route::get('/calendar',[BussinessController::class,'calendar']);
	#customer
	Route::get('/allcustomer',[BussinessController::class,'allcustomer']);
	Route::get('/addcustomer',[BussinessController::class,'addcustomer']);
	Route::post('/addcustomer1',[CustomerController::class,'getdata']);
	Route::post('/invoice',[CustomerController::class,'invoice']);
	Route::get('/search',[CustomerController::class,'serach']);
	Route::post('/notes',[CustomerController::class,'notes']);
	Route::get('/customer-report/{id}',[CustomerController::class,'creport']);

	//Route::get('/suppliers',[HomeController::class,'suppliers']);
	Route::get('/addsuppliers',[BussinessController::class,'addsuppliers']);
	Route::get('/allsites',[BussinessController::class,'allsites']);
	Route::get('/partslibrary',[BussinessController::class,'partslibrary']);
	#jobs
	Route::get('/alljobs',[BussinessController::class,'alljobs']);
	#certificate-forms
	Route::get('/certificate-forms',[BussinessController::class,'certificate_forms']);
	#part-cost
	Route::get('/part-cost',[BussinessController::class,'part_cost']);
	#Financals
	Route::get('/allquotes',[BussinessController::class,'allquotes']);
	Route::get('/invoices',[BussinessController::class,'invoices']);
	Route::get('/payment',[BussinessController::class,'payment']);
	Route::get('/purchaseorder',[BussinessController::class,'purchaseorder']);
	#my-team
	Route::get('/my-team',[BussinessController::class,'engineer']);
	#reports
	Route::get('/reports',[BussinessController::class,'reports']);
	#setting
	Route::get('/setting',[BussinessController::class,'setting']);
	#Suppliers
	Route::resource('suppliers' , 'App\Http\Controllers\business\SupplierController');
	Route::get('supplier-list' , [SupplierController::class,'suppliers'])->name('suppliers.list');
	Route::post('supplier-import' , [SupplierController::class,'importSupplier'])->name('suppliers.import');

});