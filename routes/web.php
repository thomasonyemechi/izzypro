<?php

use App\Http\Controllers\AdminController;
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




Route::group((['prefix' => 'admin/', 'as' => 'admin.',]), function() {
Route::get('/overview', [AdminController::class, 'dashboardIndex']);

    // Route::get('/overview', [AdminController::class, 'dashboardIndex']);
});
