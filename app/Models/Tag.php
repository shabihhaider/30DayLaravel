<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function jobs()
    {
        // this is going to return a relationship type and it is going to return a 'collection of jobs' because it is a 'many to many' relationship
        return $this->belongsToMany(Job::class);
    }
    // $tag->jobs
}
