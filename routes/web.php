<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController');

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'Dashboard',
    'middleware' => 'auth'
    ], function () {

    Route::get('/', 'HomeController')->name('index');
    Route::resource('/user', 'UserController');
    Route::resource('/attendance', 'AttendanceController');
    Route::resource('/information', 'InformationController');
    Route::resource('/leave', 'LeaveController');
    Route::resource('/master-position', 'MasterPositionController');
    Route::resource('/inspection', 'InspectionController');
    Route::resource('/personal-qualification', 'PersonalQualificationController');
    Route::resource('/spk-po', 'SpkPoController');
    Route::resource('/spi', 'SpiController');
    Route::resource('/invoice', 'InvoiceController');
    Route::resource('/inspection-job', 'InspectionJobController')
        ->only(['index', 'show']);
});
Route::get('/logout', 'LogoutController')->name('logout.get');

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
