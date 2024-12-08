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

// Route for showing all jobs
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

    $jobs = Job::with('employer')->latest()->cursorPaginate(3); // eager loading the employer relationship to avoid N+1 queries (simple means to avoid multiple queries)
    // latest() get the latest jobs first

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Route for showing the create job form
Route::get('/jobs/create', function() {
    return view(('jobs.create'));
});

// Route for showing a single job
Route::get('/job/{id}', function($id){
    
    $job = Job::find($id);
  
    return view("jobs.show", ['job' => $job]);
});

// Route for storing a job
Route::post('/jobs', function() {
    // Validation...

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


Route::get('/contact', function(){
    return view("contact");
});