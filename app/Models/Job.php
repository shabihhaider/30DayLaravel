<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs'; // explicitly defining the table name

    protected $fillable = ['title', 'salary']; // explicitly defining the columns that can be filled

    public function employer()
    {
        // this is going to return a relationship type
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        // this is going to return a relationship type and it is going to return a 'collection of tags' because it is a 'many to many' relationship
        return $this->belongsToMany(Tag::class);
    }
    // $job->tags
}
