<?php

use Illuminate\Support\Arr;
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
    return view('home');
});

Route::get('/jobs', function(){
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ]
    ]);
});

Route::get('/job/{id}', function($id){
    
    $jobs = [
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Director',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title' => 'Designer',
                'salary' => '$30,000'
            ]
        ];
    
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    return view("job", ['job' => $job]);
});


Route::get('/contact', function(){
    return view("contact");
});