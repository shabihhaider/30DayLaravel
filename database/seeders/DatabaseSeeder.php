<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Shabih',
            'last_name' => 'Haider',
            'email' => 'test@example.com',
        ]);

        $this->call(JobSeeder::class);
    }
}


/*
    Use "Factories" to scaffold data for your application. Factories are a convenient way to generate large amounts of data for testing or seeding your database. Laravel provides a simple, fluent API for defining your model factories and generating database records using these factories.
    Use "Database Seeders" to seed your database with test data using Eloquent models. Laravel provides a simple, fluent API for seeding your database with test data. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.

    Use "factories" to scaffold data and prepare tests.
    Use "Database Seeders" are classes that can trigger one or more factories, or database calls.
*/