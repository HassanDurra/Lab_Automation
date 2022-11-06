<?php

use App\Http\Controllers\pages;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LabAutomationController;
use App\Http\Controllers\ProductTestingController;
use App\Http\Controllers\ContactController;


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
// dashboard views and routes with function

Route::get('/Home',[pages::class,'Home']);

Route::get('/ProductTesting{Product_id}',[LabAutomationController::class,'test']);
Route::get('contact',[pages::class,'Contact']);
Route::get('/Updatetest{Product_id}',[ProductTestingController::class,'updatetest']);
Route::POST('/sended',[ContactController::class,'contact']);
Route::get('/message',[ContactController::class,'getmessage']);
Route::POST('retestupdate{Product_id}',[ProductTestingController::class,'retestupdate']);
Route::get('/search',[pages::class,'search']);
Route::get('About',[pages::class,'About']);
Route::get('/HOME',[pages::class,'home']);
Route::get('/products',[pages::class,'viewproducts']);
Route::get('/Products',[LabAutomationController::class,'showProducts']);

// Route::get('/lab',[LabAutomationController::class,'dashboard']);
Route::get('/register',[UsersController::class,'register']);
Route::POST('/inserted',[LabAutomationController::class,'insertpro']);
// Dashboard
Route::get('/datasearch',[pages::class,'Dashboardsearch']);
Route::get('/laboratory',[ProductTestingController::class,'fetchdata']);
Route::get('/capacitor',[LabAutomationController::class,'capacitors']);
Route::get('/Fuses',[LabAutomationController::class,'Fuses']);
Route::get('/switches',[LabAutomationController::class,'Switches']);
Route::get('/Gears',[LabAutomationController::class,'Gears']);
Route::get('/Tested',[ProductTestingController::class,'Tested']);
Route::get('/Analysing',[ProductTestingController::class,'Testing']);
Route::get('/usermanagement',[UsersController::class,'users']);
Route::get('/Re-testing',[ProductTestingController::class,'ReTesting']);
// fucntions
Route::get('removed/{id}',[ContactController::class,'message']);
Route::get('delete/{Product_id}',[LabAutomationController::class,'remover']);
Route::get('deleted/{Product_id}',[ProductTestingController::class,'remover']);
Route::POST('/registeration',[UsersController::class,'insertusers']);
Route::get('/Userlogout',[LabAutomationController::class,'logout']);

Route::POST('/insert{Product_id}',[ProductTestingController::class,'index']);

Route::get('/fetched',[ProductTestingController::class,'fetchdata']);
Route::get('/login',[AdminController::class,'login']);
Route::get('/userlogin',[UsersController::class,'userlogin']);
Route::get('/logout',[AdminController::class,'logout']);
Route::get('/update{Product_id}',[ProductTestingController::class, "showupdate"]);
Route::get('/test{Product_id}',[ProductTestingController::class,"showtest"]);
Route::post('/ProductUpdate{Product_id}',[ProductTestingController::class, "ProductUpdate"]);
Route::POST('/TestUpdate{Product_id}',[ProductTestingController::class,"TestProduct"]);
// mkiddlwwear
Route::group(['middleware'=>'AdminAuth'],function(){

// Route::get('/showDashboard',[UsersController::class,'dashboard']);

Route::get('/Dashboard',[AdminController::class,'dashboard']);


});
Route::group(['middleware'=>'Users'],function(){

    // Route::get('/showDashboard',[UsersController::class,'dashboard']);
    
    Route::get('/Userhome',[UsersController::class,'userhome']);
    
    
    
    });




    Route::POST('/loggedin',[UsersController::class,'userpost']);

Route::POST('/Loggedpost',[AdminController::class,'Adminlogin']);
// testing


Route::get('/counter',[LabAutomationController::class,'counter']);


