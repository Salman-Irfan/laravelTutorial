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
    public function run()
    {
        $libraries = [
            [
                'stu_id' => 1,
                // Replace with valid student IDs
                'book' => 'Book One',
                'due_date' => '2023-10-15',
                'status' => 1,
                // 1 for issued, 0 for not issued
            ],
            [
                'stu_id' => 2,
                // Replace with valid student IDs
                'book' => 'Book Two',
                'due_date' => '2023-10-20',
                'status' => 1,
            ],
            [
                'stu_id' => 3,
                // Replace with valid student IDs
                'book' => 'Book Three',
                'due_date' => '2023-10-25',
                'status' => 0,
                // Not issued
            ],
        ];

        foreach ($libraries as $libraryData) {
            Library::create($libraryData);
        }
    }
}
