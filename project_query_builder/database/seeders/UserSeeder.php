<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = collect(
            [
                [
                    'name' => 'user10',
                    'email' => 'user10@gmail.com',
                    'age' => 20,
                    'city' => 'user10 city'
                ],
                [
                    'name' => 'user11',
                    'email' => 'user11@gmail.com',
                    'age' => 36,
                    'city' => 'user11 city'
                ],
                [
                    'name' => 'user12',
                    'email' => 'user12@gmail.com',
                    'age' => 36,
                    'city' => 'user12 city'
                ],
            ]
        );
        $users->each(function ($user) {
            User::create($user);
        });
        // User::create([
        //     'name' => 'user9',
        //     'email' => 'user9@gmail.com',
        //     'age' => 36,
        //     'city' => 'user9 city'
        // ]);
    }
}
