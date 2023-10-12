<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // factory 
        // Student::factory()->count(5)->create();
        
        // seeder files
        $this->call([
            StudentSeeder::class,
            LibrarySeeder::class,
            LecturerSeeder::class
        ]);
    }
}
