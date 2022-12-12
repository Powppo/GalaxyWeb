<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FeatureController;
use App\http\Controllers\HomeController;
use App\http\Controllers\contactusController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use Illuminate\Support\Facades\Storage;
use App\User;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/index', [HomeController::class, 'upload']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [FeatureController::class, 'index']);
Route::get('/home/prohibited', [FeatureController::class, 'prohibited']);

//Profile
Route::get('/myprofile/{id}', [FeatureController::class, 'myprofile'])->name('myProfile');
Route::get('/editProfile/{id}', [FeatureController::class, 'editProfile'])->name('editProfile');
Route::post('/updateProfile/{id}', [FeatureController::class, 'updateProfile'])->name('updateProfile');

Route::group(['middleware' => ['auth', 'checkRole:Advance']], function () {
    Route::get('/home/expoint', [FeatureController::class, 'expoint']);
    Route::get('/home/upload', [FeatureController::class, 'upload'])->name('upload');
    Route::post('/uploadx', [App\Http\Controllers\FeatureController::class, 'storeUpload'])->name('storeUpload');
    Route::post('/exchange', [App\Http\Controllers\FeatureController::class, 'storeExchange'])->name('storeExchange');
});

Route::get('/toolsandmachine', [FeatureController::class, 'tam'])->name('toolsandmachine');
Route::get('/home/contact', [FeatureController::class, 'contact'])->name('contact');
Route::post('/contactx', [App\Http\Controllers\FeatureController::class, 'storeContact'])->name('storeContact');