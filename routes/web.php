<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\IntakeController;
use App\Http\Controllers\admin\StartdayController;
use App\Http\Controllers\admin\EnddayController;
/*
|-------------------------
/*
|-------------------------
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Auth::routes();

// get unread message count
Route::post('/get/message', [HomeController::class, 'getMessage'])->name('get.messagecount')->middleware('auth');
Route::get('/view/message', [HomeController::class, 'viewMessage'])->name('user.message')->middleware('auth');

Route::get('admin/message', [MessageController::class, 'index'])->name('admin.message')->middleware('auth')->middleware('admin');

// admin routes

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('auth')->middleware('admin');
Route::get('admin/setting', [AdminController::class, 'adminSetting'])->name('admin.setting')->middleware('auth')->middleware('admin');
Route::post('admin/setting', [AdminController::class, 'SaveSetting'])->name('admin.settingSave')->middleware('auth')->middleware('admin');
Route::get('admin/manageUser', [AdminController::class, 'adminManageUser'])->name('admin.manageUser')->middleware('auth')->middleware('admin');
Route::post('admin/manageUser', [AdminController::class, 'changeStatus'])->name('admin.manageUser.changestatus')->middleware('auth')->middleware('admin');
Route::delete('admin/manageUser', [AdminController::class, 'deleteUser'])->name('admin.manageUser.deleteuser')->middleware('auth')->middleware('admin');
Route::post('admin/manageUser/update', [AdminController::class, 'updateUser'])->name('admin.manageUser.updateuser')->middleware('auth')->middleware('admin');
Route::get('admin/location', [LocationController::class, 'index'])->name('admin.location')->middleware('auth')->middleware('admin');
Route::get('admin/location/create', [LocationController::class, 'create'])->name('admin.location.create')->middleware('auth')->middleware('admin');
Route::post('admin/location/save', [LocationController::class, 'saveNewLocation'])->name('admin.location.save')->middleware('auth')->middleware('admin');
Route::get('admin/location/{id}/edit', [LocationController::class, 'edit'])->name('admin.location.edit')->middleware('auth')->middleware('admin');
Route::post('admin/location/{id}/save', [LocationController::class, 'saveCurrentLocation'])->name('admin.location.savelocation')->middleware('auth')->middleware('admin');
Route::post('admin/location/delete', [LocationController::class, 'deleteCurrentLocation'])->name('admin.location.delete')->middleware('auth')->middleware('admin');
// admin slide setting route
Route::get('admin/slide', [SliderController::class, 'index'])->name('admin.slide')->middleware('auth')->middleware('admin');
Route::post('admin/slide', [SliderController::class, 'changeSlide'])->name('admin.changeslide')->middleware('auth')->middleware('admin');
//admin suppliers setting route
Route::get('admin/suppliers', [SupplierController::class, 'index'])->name('admin.suppliers')->middleware('auth')->middleware('admin');
Route::post('admin/suppliers/save', [SupplierController::class, 'save'])->name('admin.supplier.save')->middleware('auth')->middleware('admin');
Route::post('admin/suppliers/delete', [SupplierController::class, 'delete'])->name('admin.supplier.delete')->middleware('auth')->middleware('admin');
Route::post('admin/suppliers/create', [SupplierController::class, 'create'])->name('admin.supplier.create')->middleware('auth')->middleware('admin');
// admin message setting route
Route::get('admin/message', [MessageController::class, 'index'])->name('admin.message')->middleware('auth')->middleware('admin');
Route::post('admin/message/save', [MessageController::class, 'save'])->name('admin.message.save')->middleware('auth')->middleware('admin');
Route::post('admin/message/delete', [MessageController::class, 'delete'])->name('admin.message.delete')->middleware('auth')->middleware('admin');
// admin intakes setting route
Route::get('admin/intakes', [IntakeController::class, 'index'])->name('admin.intakes')->middleware('auth')->middleware('admin');
Route::post('admin/intakes', [IntakeController::class, 'create'])->name('admin.intake.create')->middleware('auth')->middleware('admin');
Route::post('admin/intakes/edit', [IntakeController::class, 'edit'])->name('admin.intake.edit')->middleware('auth')->middleware('admin');
Route::post('admin/intakes/delete', [IntakeController::class, 'delete'])->name('admin.intake.delete')->middleware('auth')->middleware('admin');

// admin my start day route
Route::get('admin/startday', [StartdayController::class, 'index'])->name('admin.startday')->middleware('auth')->middleware('admin');
Route::post('admin/startday', [StartdayController::class, 'create'])->name('admin.startday.create')->middleware('auth')->middleware('admin');
Route::post('admin/startday/delete', [StartdayController::class, 'delete'])->name('admin.startday.delete')->middleware('auth')->middleware('admin');
// admin my end day route
Route::get('admin/endday', [EnddayController::class, 'index'])->name('admin.endday')->middleware('auth')->middleware('admin');
Route::post('admin/endday', [EnddayController::class, 'create'])->name('admin.endday.create')->middleware('auth')->middleware('admin');
Route::post('admin/endday/delete', [EnddayController::class, 'delete'])->name('admin.endday.save')->middleware('auth')->middleware('admin');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth')->middleware('admin')->middleware('client')->middleware('employer')->middleware('locationmanager')->middleware('warehouse');
Route::get('client/home', [HomeController::class, 'clientHome'])->name('client.home')->middleware('auth')->middleware('client');
Route::get('employer/home', [HomeController::class, 'employerHome'])->name('employer.home')->middleware('auth')->middleware('employer');
Route::get('locationmanager/home', [HomeController::class, 'locationmanagerHome'])->name('locationmanager.home')->middleware('auth')->middleware('locationmanager');
Route::get('warehouse/home', [HomeController::class, 'warehouseHome'])->name('warehouse.home')->middleware('auth')->middleware('warehouse');

