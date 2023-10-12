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
                    'age' => 25,
                    'email' => 'seeder1@gmail.com',
                    'address' => 'pakistan',
                    'city' => 'lahore',
                    'phone' => '1234567890',
                    'password' => '12345678'
                ],
                [
                    'name' => 'seeder2',
                    'age' => 25,
                    'email' => 'seeder2@gmail.com',
                    'address' => 'pakistan',
                    'city' => 'lahore',
                    'phone' => '1234567890',
                    'password' => '12345678'
                ],
                [
                    'name' => 'seeder3',
                    'age' => 25,
                    'email' => 'seeder3@gmail.com',
                    'address' => 'pakistan',
                    'city' => 'lahore',
                    'phone' => '1234567890',
                    'password' => '12345678'
                ],
            ]
        );
        $students->each(function($student){
            Student::create($student);
        });
    }
}