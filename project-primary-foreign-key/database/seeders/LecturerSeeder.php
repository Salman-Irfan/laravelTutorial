<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lecturers = collect([
            [
                'name' => 'Lecturer 1',
                'age' => 35,
            ],
            [
                'name' => 'Lecturer 2',
                'age' => 40,
            ],
            [
                'name' => 'Lecturer 3',
                'age' => 45,
            ],
        ]);

        $lecturers->each(function ($lecturer) {
            Lecturer::create($lecturer);
        });
    }
}
