<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    // This is like the Gate (check for Authorization)
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }
}
