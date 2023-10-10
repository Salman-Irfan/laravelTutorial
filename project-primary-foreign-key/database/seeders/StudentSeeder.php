<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = collect(
            [
                [
                    'name' => 'seeder1',
                    'email' => 'seeder1@gmail.com'
                ],
                [
                    'name' => 'seeder2',
                    'email' => 'seeder2@gmail.com'
                ],
                [
                    'name' => 'seeder3',
                    'email' => 'seeder3@gmail.com'
                ],
            ]
        );
        $students->each(function($student){
            Student::create($student);
        });
        Student::create([
            'name' => 'seeder',
            'email' => 'seeder@gmail.com'
        ]);
    }
}