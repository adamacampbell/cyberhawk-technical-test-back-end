<?php

namespace Database\Seeders;

use App\Models\GradeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // GRADE TYPES
        GradeType::create([
            'name' => 1
        ]);
        GradeType::create([
            'name' => 2
        ]);
        GradeType::create([
            'name' => 3
        ]);
        GradeType::create([
            'name' => 4
        ]);
        GradeType::create([
            'name' => 5
        ]);
    }
}
