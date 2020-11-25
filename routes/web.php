<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\Job\JobController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\Dashboard\Trash\TrashController;

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
    return Inertia::render('App/Index');
});

Route::group(['prefix' => 'dashboard' , 'middleware' => 'guest'] , function(){
    Route::get('/' , [IndexController::class , 'index']);
    Route::resources([
        'jobs' => JobController::class,
        'users' => UserController::class,
        'trashs' => TrashController::class
    ]);

});

require __DIR__.'/auth.php';
