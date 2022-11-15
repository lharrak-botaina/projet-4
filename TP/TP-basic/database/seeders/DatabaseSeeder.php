<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
        Student::create(
            [
                'firstName' => Str::random(8),
                'lastName' => Carbon::now(),
                
            ]
        );
        }
      
        // \App\Models\User::factory(10)->create();

        // \App\Models\Student::factory()->create([
        //     'firstName' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
