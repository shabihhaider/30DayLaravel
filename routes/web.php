<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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



Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);


// Because there are many routes here, it is better to use a controller to handle the routes
// php artisan make:controller JobController
// Can View all route list by: php artisan route:list --except-vendor