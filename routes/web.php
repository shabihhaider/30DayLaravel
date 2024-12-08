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

// Index
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

// Create
Route::get('/jobs/create', function() {
    return view(('jobs.create'));
});

// Show
Route::get('/jobs/{id}', function($id){
    
    $job = Job::find($id);
  
    return view("jobs.show", ['job' => $job]);
});

// Store
Route::post('/jobs', function() {
    // Validation: https://laravel.com/docs/11.x/validation (go to this link and see the available validation rules)
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// Edit
Route::get('/jobs/{id}/edit', function($id){
    
    $job = Job::find($id);
  
    return view("jobs.edit", ['job' => $job]);
});

// Update
Route::patch('/jobs/{id}', function($id){ // patch is used to update the data
    // validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize...
    
    // update the job
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    // redirect
    return redirect('/jobs/' . $job->id);
});

// Delete
Route::delete('/jobs/{id}', function($id){ // delete is used to delete the data
    // authorize...

    // delete the job
    $job = Job::findOrFail($id);
    $job->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/contact', function(){
    return view("contact");
});