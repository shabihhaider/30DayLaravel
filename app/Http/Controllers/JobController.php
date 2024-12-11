<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
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
    }

    public function create()
    {
        return view(('jobs.create'));
    }

    public function show(Job $job)
    {
        return view("jobs.show", ['job' => $job]);
    }

    public function store()
    {
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
    }

    public function edit(Job $job)
    {

        Gate::authorize('edit-job', $job); 

        return view("jobs.edit", ['job' => $job]);
    }

    public function update(Job $job)
    {
        // validation
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // authorize...
        
        // update the job
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        // redirect
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        // authorize...

        // delete the job
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
