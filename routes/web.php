<?php

use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    return view('home');
});

Route::prefix('org')->group(function(){
    Route::get("settings", [SettingController::class, "organization"])->name('org-settings');
});

Route::prefix('idv')->group(function(){
    Route::get("settings", [SettingController::class, "individual"])->name('idv-settings');
});

