<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model {
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary']; // So that it can protect against mass assignment attacks (what columns are allowed to be mass assigned)
}