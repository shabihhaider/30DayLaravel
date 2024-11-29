<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
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
    return view('home');
});

Route::get('/jobs', function(){
    
    /*
        bash: php artisan vendor:publish --tag=laravel-pagination
        it will publish the pagination views to resources/views/vendor/pagination
    */

    /*
        you can use differnt paginations:
            1. pagination
            2. simplePaginate (it will only return the next and previous links)
            3. cursorPaginate (it is used for "large datasets", it is more efficient than pagination and simplePaginate)
    */

    $jobs = Job::with('employer')->cursorPaginate(3); // eager loading the employer relationship to avoid N+1 queries (simple means to avoid multiple queries)
    
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function($id){
    
    $job = Job::find($id);
  
    return view("job", ['job' => $job]);
});


Route::get('/contact', function(){
    return view("contact");
});