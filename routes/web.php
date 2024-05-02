<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::get('/about', function () {
    return view('about');
});



Route::get('/service', function () {
    return view('service');
});




Route::get('/portfolio', function () {
    return view('portfolio');
});



Route::get('/contact', function () {
    return view('contact');
});


Route::get('/post-project', function () {
    return view('post_project');
});
Route::get('/access-account', function () {
    return view('login');
})->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/access-account')->with('success', 'You have been scuessfuly looged out');
});



Route::post('/post_project', [ProjectController::class, 'postProject']);
Route::post('/access-account', [UserController::class, 'loginUser']);

Route::get('/verify/{trno}', [PaymentController::class, 'verifyFlutter']);



Route::group((['prefix' => 'admin/', 'as' => 'admin.',]), function() {
    Route::get('/overview', [AdminController::class, 'dashboardIndex']);
    Route::get('/manage_client', [AdminController::class, 'clientIndex']);
    Route::get('/client_orders', [AdminController::class, 'clientOrdersIndex']);
    Route::get('/project/{id}', [AdminController::class, 'projectIndex']);

    // Route::get('/overview', [AdminController::class, 'dashboardIndex']);
});



Route::group((['prefix' => 'client/', 'as' => 'client.', 'middleware' => ['auth'] ]), function() {
    Route::get('/account', [UserController::class, 'dashboardIndex']);    
    Route::post('/update-profile', [UserController::class, 'updateProfile']);   
    Route::get('/profile', [UserController::class, 'profileIndex']);   
    Route::get('/security', [UserController::class, 'securityIndex']);   
    Route::get('/project/{id}', [UserController::class, 'projectIndex']);   
});
    
