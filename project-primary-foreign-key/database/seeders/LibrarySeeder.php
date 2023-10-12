<?php

namespace Database\Seeders;

use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libraries = collect(
            [
                [
                    'stu_id' => 1,
                    'book' => 'book 1',
                    'due_date' => 2023-08-12,
                    'status' => true,
                ],
                [
                    'stu_id' => 2,
                    'book' => 'book 2',
                    'due_date' => 2023-08-12,
                    'status' => true,
                ],
                [
                    'stu_id' => 3,
                    'book' => 'book 2',
                    'due_date' => 2023-08-12,
                    'status' => true,
                ],
            ]
        );
        $libraries->each(function ($library) {
            Library::create($library);
        });
    }
}
